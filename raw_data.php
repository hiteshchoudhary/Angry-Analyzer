<?php
include_once "config.php";

$ClassDbObj = new ClassDb();			
$csvFile = 'Book.csv';
//$csv = readCSV($csvFile);
$csv = $ClassDbObj->readCSV($csvFile);
$num = count($csv);
//print_r(array_count_values($num));
				
?>


<style>
 #rawdata
 {
 	background-color:rgb(26, 188, 156);
 }
 .menu #rawdata a:hover
 {
 	color:white !important;
 }
 </style>
   <div class="row">
   <div class="col-md-12">
		<div class="col-md-6">
   		</div>
   		<div class="col-md-6">
   		<div class="div_right right_margin">
			<!--<div class="apply_box b_r icons_hover">
			<h5 style="color:white; padding:4% 16% 10%;">Apply</h5>
			</div>-->
		</div>
   		</div>
   
   </div>
   </div>
   
   
   <div class="row">
		<div class="col-md-12">
		<div id="raw_table"class="table-border table-response">
		
		<div class="table-responsive">
		
			<table id="table-striped" class="table table-bordered table-hover table-striped">
			<tr>
			<td>
			<table class="table table-bordered table-hover" id="table_heading">
			<!--<thead>-->
				<tr>
				
				</tr>
				</table>
				</td>
				</tr>
				<!--</thead>-->
				<tr>
				<td>
				<div class="div_scroll">
         		<table class="table table-bordered table-hover" id="table_body">
		
		<?php for ($c=2; $c < $num; $c++){?> 
				
				<?php echo isset($csv[$c][0])?$csv[$c][0].',':'';?>
				<?php echo isset($csv[$c][1])?$csv[$c][1].',':'';?>
				<?php echo isset($csv[$c][2])?$csv[$c][2].',':'';?>
				<?php echo isset($csv[$c][3])?$csv[$c][3].',':'';?>
				<?php echo isset($csv[$c][4])?$csv[$c][4].',':'';?>
				<?php echo isset($csv[$c][5])?$csv[$c][5].',':'';?>
				<?php echo isset($csv[$c][6])?$csv[$c][6].',':'';?>
				<?php echo isset($csv[$c][7])?$csv[$c][7].',':'';?>
				<?php echo isset($csv[$c][8])?$csv[$c][8].',':'';?>
				<?php echo isset($csv[$c][9])?$csv[$c][9].',':'';?>
				<?php echo isset($csv[$c][10])?$csv[$c][10].',':'';?>
				<?php echo isset($csv[$c][11])?$csv[$c][11].',':'';?>
				<?php echo isset($csv[$c][12])?$csv[$c][12].',':'';?>
				<?php echo isset($csv[$c][13])?$csv[$c][13].',':'';?>
				<?php echo isset($csv[$c][14])?$csv[$c][14].',':'';?>
				
				
				<?php echo "</br>";?>
				<?php echo "</br>";?>
					
		<?php }
		?>
		
		</table>  
       			</div>
				</td>
				</tr>
			</table>
		</div>
		</div>
		</div> 
  </div>
   
<!--</div>-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	

