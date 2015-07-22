<?php
require_once "config.php";
//require_once "include/header.php";
$ClassDbObj = new ClassDb();			
$csvFile = 'Book.csv';
//$csv = readCSV($csvFile);
$csv = $ClassDbObj->readCSV($csvFile);
$num = count($csv);
//print_r(array_count_values($num));
				
?>
<style>
 #roaming_clients
 {
 	background-color:rgb(26, 188, 156);
 }
 .menu #roaming_clients a:hover
 {
 	color:white !important;
 }
 </style>

   
   <div class="row">
   <div class="col-md-12">
   <div class="col-md-6">
   <h4 class="roaming">Roaming Clients</h4>
   </div>
   <div class="col-md-6">
   		<div class="div_right">
	<!--		<p style="float:left; margin-top:6px; margin-right:4px">Total:0</p>
			
			<div class="icon2 b_r">
			<h5 style="margin:5px;"><i class="fa fa-filter" style="font-size:17px; color:white;"></i>probed SSDs</h5>
			</div>-->
			<p class="para_roaming">Total:<?php echo $num; ?></p>
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
  
  	
	
	<input type="checkbox" value="client_mac" checked onChange="checkbx('check1',this);"> Client MAC</button>
	<br/>
	
	<input type="checkbox" value="first_seen" checked onChange="checkbx('check2',this);"> First Seen</button>
	<br/>
	
	<input type="checkbox" value="last_seen" checked onChange="checkbx('check3',this);"> Last Seen</button>
	<br/>
	
	
	<input type="checkbox" value="Packets" checked onChange="checkbx('check4',this);"> Packets</button>
	<br/>
	
	<input type="checkbox" value="Signals" checked onChange="checkbx('check5',this);"> Signals</button>
	<br/>
	
	<input type="checkbox" value="probed_ESSIDs" checked onChange="checkbx('check6',this);"> Probed ESSIDs</button>

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
				
					<th class="check1 shadow"><i class="fa fa-filter filter_icon"></i> Client MAC</th>
					<th class="check2 shadow"><i class="fa fa-filter filter_icon"></i> First Seen</th>
					<th class="check3 shadow"><i class="fa fa-filter filter_icon"></i> Last Seen</th>
					<th class="check4 shadow"><i class="fa fa-filter filter_icon"></i> Packets</th>
					<th class="check5 shadow"><i class="fa fa-filter filter_icon"></i> Signal</th>
					<th class="check6 shadow"><i class="fa fa-filter filter_icon"></i> probed ESSID</th>
				
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
				
				<td class="check1"><?php echo isset($csv[$c][0])?$csv[$c][0]:'';?></td>
				<td class="check2"><?php echo isset($csv[$c][1])?$csv[$c][1]:'';?></td>
				<td class="check3"><?php echo isset($csv[$c][2])?$csv[$c][2]:'';?></td>
				<td class="check4"><?php  echo isset($csv[$c][10])?$csv[$c][10]:'';?></td>
				<td class="check5"><?php echo isset($csv[$c][8])?$csv[$c][8]:'';?></td>
				<td class="check6"><?php echo isset($csv[$c][13])?$csv[$c][13]:'';?></td>
				
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
   
<!--</div>-->

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
<?php 
//require_once "include/footer.php";
?>
 

