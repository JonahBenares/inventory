<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/reports.js"></script>
<style type="text/css">
	#name-item{
		width: 50%!important;
	}
	.arrow-top2{
	    content: "";
	    position: absolute;
	    top: -10%;
	    left: 10%;
	    transform: rotate(180deg);
	    margin-left: -5px;
	    border-width: 5px;
	    border-style: solid;
	    border-color: #e66513 transparent transparent transparent;
	}
	.table_sty1{
		padding-right:15px;
		padding-left:15px;
	}
	.table-sty2{
		padding: 0px 15px;
		text-align: center;
		font-weight: 600;
	}
	.table-sty3{
		padding: 0px 100px;
		text-align: center;
		font-weight: 600;
	}

	.table-sty4{
		padding: 0px 40px;
		text-align: center;
		font-weight: 600;
	}
	.color_back{
		background: yellow;
	}

	table {
  border-collapse: collapse;
  background: white;
  table-layout: fixed;
  width: 100%;
}
th, td {
  padding: 8px 16px;
  border: 1px solid #ddd;
  width: 160px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
	.pane {
  background: #eee;
}
.pane-hScroll {
  overflow: auto;
  width: 400px;
  background: gray;
}
.pane-vScroll {
  overflow-y: auto;
  overflow-x: hidden;
  height: 200px;
  background: red;
}

.pane--table2 {
  width: 400px;
  overflow-x: scroll;
}
.pane--table2 th, .pane--table2 td {
  width: auto;
  min-width: 160px;
}
.pane--table2 tbody {
  overflow-y: scroll;
  overflow-x: hidden;
  display: block;
  height: 200px;
}
.pane--table2 thead {
    display: table-row;
}

</style>
<?php
	function dateDifference($date_1 , $date_2){
		$datetime2 = date_create($date_2);
		$datetime1 = date_create($date_1 );
		$interval = date_diff($datetime2, $datetime1);
		return $interval->format('%R%a');
	}
	$now = date('Y-m-d');
?>
<div class="col-lg-12 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active"> Accounting Report</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<br>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default shadow">
				<div class="panel-heading" style="height:20px">
				</div>
				<div class="panel-body">
					<div class="canvas-wrapper">
						<div class="row" style="padding: 20px">
							<label>From:<input type="date" class="form-control" name="from_date" id="from_date"></label>
							<label>Category:
								<select name="category" class="form-control" id="category" onChange="chooseCategory();">
												<option value = "" selected="">-Category-</option>
												<?php foreach($category AS $cat){ ?>
													<option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_name; ?></option>
												<?php } ?>
											</select>
							</label>
							<label>Sub Category:
							<select name="subcat" class="form-control btn-block" id="subcat">
												
							</select></label>
							<button class='btn btn-primary' name='generateAccounting' onclick="generateAccounting()">Generate Report</button>
							<?php if(!empty($from)){ ?>
							<a href = "<?php echo base_url();?>index.php/reports/export_foraccounting/<?php echo $from;?>/<?php echo $cat1;?>/<?php echo $subcat1;?>" class = "btn btn-primary pull-right">Export to Excel</a>

							<div class="pane pane--table1">
								<div class="pane-hScroll">
								<table>
								<thead>
								<th>1foo</th><th>2foo</th><th>3foo</th><th>4foo</th><th>5foo</th><th>6foo</th>
								</thead>
								</table>

								<div class="pane-vScroll">
								<table>
								<tbody>
								<tr>
									<td>1</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>2</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>3</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>4</td>
									<td>foo foo foo foo foo foo foo foo foo foo foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>5</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>6</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>7</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>8</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>9</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>10</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>11</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>12</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>13</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>14</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>15</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>16</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>17</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>18</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>19</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>20</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>21</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>22</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>23</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>24</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>25</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>26</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>27</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>28</td>								
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>28</td>

									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>29</td>

									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								<tr>
									<td>30</td>

									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
									<td>foo</td>
								</tr>
								</tbody>
								</table>
								</div>
								</div>
								</div>
							
							<?php } ?>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		// Example 1
		$('.pane-hScroll').scroll(function() {
		  $('.pane-vScroll').width($('.pane-hScroll').width() + $('.pane-hScroll').scrollLeft());
		});

		function generateAccounting(){
			 var from= document.getElementById("from_date").value;

			 var cat= document.getElementById("category").value;
			 if(cat!=''){
			 	cat=cat;
			 } else {
			 	cat='null';
			 }
			 var subcat= document.getElementById("subcat").value;
			 if(subcat!=''){
			 	subcat=subcat;
			 } else {
			 	subcat='null';
			 }
			// var to= document.getElementById("to_date").value;
			 window.location.href='<?php echo base_url(); ?>index.php/reports/for_accounting/'+from+'/'+cat+'/'+subcat;
		}
	</script>