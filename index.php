<?php
require_once "include/header.php";
$ClassDbObj = new ClassDb();			
//$csvFile = 'csvfile/data.csv';
//$csv = $ClassDbObj->readCSV($csvFile);
//echo'<pre>';
//print_r($csv);die;

//$num = count($csv);	
?>
<script>
function load_file(str)
{	
	jQuery(".popup_wrapper").hide();
	$( ".load_file" ).load( str );

} 
 

</script> 

<script>
 jQuery(document).ready(function(){
	document.getElementById("csv").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
});

</script>

<div class="load_file">


<div class="row">
   <div class="col-md-12">
   <div class="col-md-6">
   
   </div>
   <div class="col-md-6">
   		<div class="div_right">
		
			<p class="para">Total:0</p>
			
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



<div class="row">
  	<div class="col-md-12">
			<div id="strip1" class="table-border">
		<div class="table-responsive">
		<table id="table-striped" class="table table-bordered table-hover table-striped">
			<tr>
			<td>
			<table class="table table-bordered table-hover" id="table_heading">
			
				<tr>
				
					<th class="check1 shadow"><i class="fa fa-filter filter_icon"></i>&nbsp;ESSID</th>
					<th class="check2 shadow"><i class="fa fa-filter filter_icon"></i> BSSID</th>
					<th class="check3 shadow" style="width:8%;"><i class="fa fa-filter filter_icon"></i>&nbsp;channel</th>
					<th class="check4 shadow"><i class="fa fa-filter filter_icon"></i> Privacy</th>
					<th class="check5 shadow"><i class="fa fa-filter filter_icon"></i> Cipher</th>
					<th class="check6 shadow"><i class="fa fa-filter filter_icon"></i> Authentication</th>
					<th class="check7 shadow"><i class="fa fa-filter filter_icon"></i> Packets</th>
					<th class="check8 shadow"><i class="fa fa-filter filter_icon"></i> Signal</th>
					
					</tr>
				</table>
				</td>
				</tr>
				
				<tr>
				<td>
				<div class="div_scroll">
         		<table class="table table-bordered table-hover" id="table_body">
				
				<?php for ($c=0; $c < 50; $c++){?> 
				<tr>
				<td class="check1"><?php echo ' ';?></td>
				<td class="check2"><?php echo ' ';?></td>
				
				<td class="check3"><?php echo ' ';?></td>
				
				<td class="check4"><?php echo ' ';?></td>
				<td class="check5"><?php echo ' ';?></td>
				<td class="check6"><?php echo ' ';?></td>
				
				<td class="check7"><?php echo ' ';?></td>
				<td class="check8"><?php echo ' ';?></td>
				
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


</div>

<div class="popup_wrapper">   
<div id="uploadbx" class="pop_up">
<div class="pop_up_top"><p><b>Upload CSV file with Scan Data</b></p></div>
<div class="pop_up_bottom">
<iframe id="popupFrame" name="popupFrame" style="display:none;"></iframe>
<form method="post" enctype="multipart/form-data" action="upload.php" target="popupFrame">
<!--<div class="form-group">
<label for="">Browse</label>
<input id="csv" type="file" name="csv"/><br>
<img src="image/btn.png"/>
<p style="margin-left:44%; font-size:10px;"><b>Or</b></p>
</div>-->
<!--<div class="fileUpload btn btn-primary">
    <span>Browse</span>
    <input type="file" class="upload" />
</div>-->

<input id="uploadFile" class="browse_txt url_border"/>
<div class="fileUpload btn btn-primary butn_bg">
    <span>Browse</span>
    <input id="csv" name="csv" type="file" class="upload"/>
		
</div>
<div class="txt_or">
<p style="margin-left:44%; font-size:10px;"><b>Or</b></p>
</div>


<div class="url_txt">
<input type="text" name="text_box" class="url_txt url_border" placeholder="Enter URL here"/>
</div>

<div class="button">
<button type="submit" name="add" class="btn btn-primary butn_bg">Analyze</button>
</div>

<div class="blank">
</div>

</form>
</div>
</div>   

</div>

<?php 
require_once "include/footer.php";
?>
