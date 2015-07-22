<?php
include_once "config.php";
$ClassDbObj = new ClassDb();			
$csvFile = 'csvfile/data.csv';
$csv = $ClassDbObj->readCSV($csvFile);

//echo '<pre>';
//print_r($csv);
//echo '</pre>';die;
$num = count($csv);
//print_r(array_count_values($num));
				
?>
 <style>
 #networks
 {
 	background-color:rgb(26, 188, 156);
	
 }
 .menu #networks a:hover
 {
 	color:white !important;
 }
 </style>
   <div class="row">
   <div class="col-md-12">
   <div class="col-md-6">
   
   </div>
   <div class="col-md-6">
   		<div class="div_right">
		
			<p class="para">Total:<?php echo $num; ?></p>
			
			<!--<div class="icon2 b_r icons_hover">
			<h5 class="probed"><i class="fa fa-filter probed_icon"></i>&nbsp;Probed SSIDs</h5>
			</div>-->
			
			<div class="icon1 b_r icons_hover">
			<a id="icon1_show" href="#" onClick="showbox()" style="color:white;"><i class="fa fa-edit pd_left"></i></a>
			<a id="icon1_hide" href="#" onClick="hidebox();" style="display:none; color:white;"><i class="fa fa-edit pd_left"></i></a>
			
			</div>
			
			<!--<div class="icon1 b_r icons_hover">
			<i class="fa fa-trash pd_left"></i>
			</div>
			
			<div class="icon1 b_r icons_hover">
			<i class="fa fa-file pd_left"></i>
			</div>-->
			
			<!--<div class="icon1 b_r icons_hover">
			<i class="fa fa-camera pd_left"></i>
			</div>-->
				
		</div>
   
  	</div>
   
   </div>
   </div>
   
   <div id="edit_box_1" class="edit-box">
   
  	<input type="checkbox"  value="ESSID" checked onChange="checkbx('check1',this);"> ESSID
	<br/>
	
	<input type="checkbox" value="BSSID" checked onChange="checkbx('check2',this);"> BSSID
	<br/>
	
	<input type="checkbox" value="channel" checked onChange="checkbx('check3',this);"> Channel
	<br/>
	
	<input type="checkbox" value="Privacy" checked onChange="checkbx('check4',this);"> Privacy
	<br/>
	
	<input type="checkbox" value="Cipher" checked onChange="checkbx('check5',this);"> Cipher
	<br/>
	
	<input type="checkbox" value="Authentication" checked onChange="checkbx('check6',this);"> Authentication
	<br/>
	
	<input type="checkbox" value="Packets" checked onChange="checkbx('check7',this);"> Packets
	<br/>
	
	<input type="checkbox" value="Signals" checked onChange="checkbx('check8',this);"> Signals
	<br/>
	
	<input type="checkbox" value="Clients" checked onChange="checkbx('check9',this);"> Clients
	<br/>
   
  </div>
    
  
  <div class="row">
  	<div class="col-md-12">
			<div class="table-border table-response">
		<div class="table-responsive">
		
			<table id="table-striped" class="table table-bordered table-hover table-striped">
			<tr>
			<td>
			<table class="table table-bordered table-hover" id="table_heading">
			<!--<thead>-->
				<tr>
				
				
					<th class="check1 shadow"><i class="fa fa-filter filter_icon"></i>&nbsp;ESSID</th>
					<th class="check2 shadow"><i class="fa fa-filter filter_icon"></i> BSSID</th>
				<!--<th>First time seen</th>
					<th>Last time seen</th>-->
					<th class="check3 shadow" style="width:8%;"><i class="fa fa-filter filter_icon"></i>&nbsp;channel</th>
				<!--<th>Speed</th>-->
					<th class="check4 shadow"><i class="fa fa-filter filter_icon"></i> Privacy</th>
					<th class="check5 shadow"><i class="fa fa-filter filter_icon"></i> Cipher</th>
					<th class="check6 shadow"><i class="fa fa-filter filter_icon"></i> Authentication</th>
					<th class="check7 shadow"><i class="fa fa-filter filter_icon"></i> Packets</th>
					<th class="check8 shadow"><i class="fa fa-filter filter_icon"></i> Signal</th>
					
				<!--<th>Power</th>
					<th># beacons</th>
					<th># IV</th>
					<th>LAN IP</th>
					<th>ID-length</th>
					
					<th>Key</th>-->
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
				<tr>
				<td class="check1"><?php echo isset($csv[$c][13])?$csv[$c][13]:'';?></td>
				<td class="check2"><?php echo isset($csv[$c][0])?$csv[$c][0]:'';?></td>
				<?php // echo isset($csv[$c][1])?$csv[$c][1]:'';?>
				<?php //echo isset($csv[$c][2])?$csv[$c][2]:'';?>
				<td class="check3"><?php echo isset($csv[$c][3])?$csv[$c][3]:'';?></td>
				<?php //echo isset($csv[$c][4])?$csv[$c][4]:'';?>
				<td class="check4"><?php echo isset($csv[$c][5])?$csv[$c][5]:'';?></td>
				<td class="check5"><?php echo isset($csv[$c][6])?$csv[$c][6]:'';?></td>
				<td class="check6"><?php echo isset($csv[$c][7])?$csv[$c][7]:'';?></td>
				<?php // echo isset($csv[$c][8])?$csv[$c][8]:'';?>
				<?php //echo isset($csv[$c][9])?$csv[$c][9]:'';?>
				<td class="check7"><?php  echo isset($csv[$c][10])?$csv[$c][10]:'';?></td>
				<td class="check8"><?php echo isset($csv[$c][8])?$csv[$c][8]:'';?></td>
				<?php //echo isset($csv[$c][11])?$csv[$c][11]:'';?>
				<?php //echo isset($csv[$c][12])?$csv[$c][12]:'';?>
				<?php //echo isset($csv[$c][14])?$csv[$c][14]:'';?>
				</tr>	
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
   
   
   
 <!-- </div>-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<script>
function showbox()
{
	jQuery("#edit_box_1").show().addClass("dis");
	jQuery("#icon1_hide").show().addClass("dis");
	jQuery("#icon1_show").hide().addClass("dis");
}	

function hidebox()
{
	jQuery("#edit_box_1").hide().addClass("dis");
	jQuery("#icon1_hide").hide().addClass("dis");
	jQuery("#icon1_show").show().addClass("dis");
	
}

function checkbx(cls,obj)
{

	if(obj.checked)
	{
	jQuery("."+cls).show().addClass("dis");
	}

	else
	{
	jQuery("."+cls).hide().addClass("dis");
	}

}
</script>

 