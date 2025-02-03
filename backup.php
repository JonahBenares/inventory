<?php

backup_tables('localhost', 'root', '', 'db_inventory');

function backup_tables($host, $user, $pass, $name, $tables = '*')
{
    $link = new mysqli($host, $user, $pass, $name);

    // Check connection
    if ($link->connect_error) {
        die('Connection failed: ' . $link->connect_error);
    }

    $return = '';
    if ($tables == '*') {
        $tables = [];
        $result = $link->query('SHOW TABLES');
        while ($row = $result->fetch_row()) {
            $tables[] = $row[0];
        }
    } else {
        $tables = is_array($tables) ? $tables : explode(',', $tables);
    }

    foreach ($tables as $table) {
        $result = $link->query("SELECT * FROM `$table`");
        $num_fields = $result->field_count;

        $row2 = $link->query("SHOW CREATE TABLE `$table`")->fetch_row();
        $return .= "\n\n" . $row2[1] . ";\n\n";

        while ($row = $result->fetch_row()) {
            $return .= "INSERT INTO `$table` VALUES(";
            for ($j = 0; $j < $num_fields; $j++) {
                $row[$j] = $link->real_escape_string($row[$j]);
                $return .= isset($row[$j]) ? '"' . $row[$j] . '"' : '""';
                if ($j < ($num_fields - 1)) {
                    $return .= ',';
                }
            }
            $return .= ");\n";
        }
        $return .= "\n\n\n";
    }

    $data = date("m_d_Y") . '.sql';
    $filePath = 'C:\backup\inventory\db_backup\/' . $data;
    file_put_contents($filePath, $return);

 
    //$destination = "C:\/OneDrive_link\/Inventory\/db_backup\/" . $data;
    //rcopy($filePath, $destination);
}


function rrmdir($dir)
{
    if (is_dir($dir)) {
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") rrmdir("$dir/$file");
        }
        rmdir($dir);
    } else if (file_exists($dir)) {
        unlink($dir);
    }
}

// Function to copy folders and files
function rcopy($src, $dst)
{
    if (is_dir($src)) {
        mkdir($dst, 0777, true);
        $files = scandir($src);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                rcopy("$src/$file", "$dst/$file");
            }
        }
    } else if (file_exists($src)) {
        copy($src, $dst);
    }
}

$rootPath = realpath('uploads');
$zip = new ZipArchive();
$zipFilename = 'C:\backup\inventory\uploads\/' . date('m_d_Y') . '.zip';
if ($zip->open($zipFilename, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($rootPath),
        RecursiveIteratorIterator::LEAVES_ONLY
    );

    foreach ($files as $file) {
        if (!$file->isDir()) {
            $filePath = $file->getRealPath();
            $relativePath = substr($filePath, strlen($rootPath) + 1);
            $zip->addFile($filePath, $relativePath);
        }
    }
    $zip->close();
}


//$zipDestination = "C:/Users/User/Dropbox/xampp/htdocs/inventory/uploads/" . date('m_d_Y') . '.zip';
//rcopy($zipFilename, $zipDestination);

?>
