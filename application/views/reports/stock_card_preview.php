<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Print Stock Card</title>
</head>
<style type="text/css">
    .nomarg{
        margin:0px;
    }
    tr>td.dashed, 
    tr>th.dashed {
        border-right: 2px dashed #000!important;
    }
    body{
        font-size: 9px!important;
        color: #000!important;
        font-weight: 600;
    }
    .text-red{
        color: red;
        -webkit-print-color-adjust: exact;
    }
    .text-white{
        color: white!important;
        -webkit-print-color-adjust: exact;
    }
    .text-blue{
        color: blue;
        -webkit-print-color-adjust: exact;
    }
    .font8{
            font-size: 8px;
        }
    @media print{
        .text-red{
            color: red;
            -webkit-print-color-adjust: exact;
        }
        .text-blue{
            color: blue;
            -webkit-print-color-adjust: exact;            
        }
        #print-btn{
            display: none;
        }
        .font8{
            font-size: 8px!important;
        }
        .table-bordered>tbody>tr>td, 
        .table-bordered>tbody>tr>th, 
        .table-bordered>tfoot>tr>td, 
        .table-bordered>tfoot>tr>th, 
        .table-bordered>thead>tr>td, 
        .table-bordered>thead>tr>th {
        border: 1px solid #fff!important;
    }
    }
    p{
        color: #000
    }
    .padl5{
        padding-left: 2px;
    }
    .padr5{
        padding-right:2px;
    }
    .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
        border: 1px solid #fff;
    }
</style>
<body style="padding-top:0px">    
    <div>
        <table class="table-bordered" width="100%" >
            <tr class="hidden-tr">
                <td style="width: 33.33%"></td>
                <td style="width: 33.33%"></td>
                <td style="width: 33.33%"></td>
            </tr>
            <tr>                
                <td colspan="1" align="center" style="padding-right: 15px">
                    <table class="table-bordered" width="100%" style="border:2px solid #fff;">
                        <tr>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                        </tr>   
                        <tr>
                            <td colspan="8">
                                <center>
                                    <h3 class="nomarg text-white"><b style="color:#ffffff00!important">CENPRI STOCK CARD</b></h3>
                                    <small id="psrntby">printed by: admin admin admin | 2019-01-10 | 20:20am</small>
                                </center>
                            </td>
                        </tr>  
                        <tr>
                            <td colspan="1" class="padr5 " align="right"><p class="text-white" style="height: 40px">Item Desc:</p></td>
                            <td colspan="7" class="padl5"><p style="height: 40px">Sorbent Boom, Economical SPC, 8" x 10" ENV810 (Economy Boom w/Blue Sleeve, Lint Free, 4/Bale, Absorbency Capacity: 65ga)</p></td>
                        </tr>  
                        <tr>
                            <td colspan="1" class="padr5 text-white" align="right">Location:</td>
                            <td colspan="2" class="padl5">WH - Extn B</td>
                            <td colspan="1" class="padr5 text-white" align="right">Rack:</td>
                            <td colspan="2" class="padl5">Rack - A1</td>
                            <td colspan="1" class="padr5 text-white" align="right">Ord Qty:</td>
                            <td colspan="1" class="padl5">9999</td>                            
                        </tr> 
                        <tr>
                            <td colspan="1" class="padr5 text-white" align="right">Brand:</td>     
                            <td colspan="7" class="padl5">Tranfindo Transformer</td>                            
                        </tr> 
                        <tr>
                            <td colspan="1" class="padr5 text-white" align="right">Orig PN:</td>
                            <td colspan="2" class="padl5">CON-CHE_1005</td>
                            <td colspan="1" class="padr5 text-white" align="right">Cost:</td>
                            <td colspan="2" class="padl5">99999</td>      
                            <td colspan="1" class="padr5 text-white" align="right">U/M:</td>
                            <td colspan="1" class="padl5">kg</td>                      
                        </tr> 
                        <tr>
                            <td colspan="1" class="padr5 text-white" align="right">Cat PN:</td>
                            <td colspan="2" class="padl5">213123</td>
                            <td colspan="1" class="padr5 text-white" align="right">BarCode:</td>
                            <td colspan="2" class="padl5"></td>    
                            <td colspan="1" class="padr5 text-white" align="right">Model:</td>
                            <td colspan="1" class="padl5"></td>                         
                        </tr> 
                        <tr>
                            <td colspan="8" class="padr5" align="right"><br></td>                    
                        </tr> 
                        <tr>
                            <td colspan="1" align="center" class="text-white">Date</td>
                            <td colspan="3" align="center" class="text-white">Ref</td>
                            <td align="center" class="text-white">Received</td>                        
                            <td align="center" class="text-white">Issued</td>                        
                            <td align="center" class="text-white">Restock</td>                        
                            <td align="center" class="text-white">Balance</td>                        
                        </tr> 
                        <tr>
                            <td class="font8" colspan="1" align="center">2019-09-19</td>
                            <td class="font8" colspan="3" align="center">MreqF-2019-03-0071</td>
                            <td class="font8" align="center">99</td>                        
                            <td class="font8" align="center">99</td>                        
                            <td class="font8" align="center">999</td>                        
                            <td class="font8" align="center">999</td>                        
                        </tr> 
                        <tr>
                            <td class="font8" colspan="1" align="center">2019-09-19</td>
                            <td class="font8" colspan="3" align="center">MreqF-2019-03-0071</td>
                            <td class="font8" align="center">99</td>                        
                            <td class="font8" align="center">99</td>                        
                            <td class="font8" align="center">999</td>                        
                            <td class="font8" align="center">999</td>                        
                        </tr> 
                    </table>
                </td>
                
                <td colspan="2" align="center">
                    <div class="btn-group" style="position: fixed;top:10px" id="print-btn">
                    <button class="btn btn-primary" onclick="window.print()">Print <u><b>Stock Card</b></u></button>
                    <a class="btn btn-warning" target="_blank" id="print-btn1" href = "<?php echo base_url(); ?>index.php/reports/sc_prev_blank"> Print <u><b>Blank</b></u> Stock Card</a>
                </td>
            </tr>
        </table>

</body>
</html>