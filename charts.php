<?php 
include_once "config.php";
//require_once "include/header.php";
?>
<script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
<script>

function load_chart()
{	

	var txt_type=$('#txt_type').val();
	var chart_name= $('#dropdn').val();
	var chart_type= $('#chart_type').val();	
	var data = {'chart_type': chart_type ,'chart_name' : chart_name,'txt_type' : txt_type};
	
	jQuery.post('load_chart.php', data,function(response) {
	if(response)
	{
	
	
	
		var json_array=$.parseJSON(response);
		draw_chart(json_array['chart_title'],json_array['chart_type'],json_array['array']);

	}
	});	
	return false;	
}



function draw_chart(title,type,dataPoints)
{ 

    var chart = new CanvasJS.Chart("chartContainer", {
     title:{
        text:title           
      },
   animationEnabled: true,
      data: [//array of dataSeries              
        { //dataSeries object
 
         /*** Change type "column" to "bar", "area", "line" or "pie"***/
         type: type,
         dataPoints:dataPoints
       }
       ]
     });

    chart.render();
  
}

jQuery(document).ready(function(){
	load_chart();
});

</script>   

<style>
 #charts
 {
 	background-color:rgb(26, 188, 156);
 }
 .menu #charts a:hover
 {
 	color:white !important;
 }
 </style>
<div class="row">
   <div class="col-md-2">
   </div>
   <div class="col-md-10">
   		<div class="div_right_chart">
		
		<p class="para_chart">Generate Graph</p>
		
		<div class="dp">
		<form id="asd" method="post">
		
		<select id="dropdn" name="dropdown" onchange='load_chart();' class="drop_col">
		
	<option value="5" <?php if(isset($_POST['dropdown'])){if($_POST['dropdown']== "5"){ echo 'selected'; }} ?>>Privacy</option>
	<option value="13" <?php if(isset($_POST['dropdown'])){if($_POST['dropdown']== "13"){ echo 'selected'; }} ?>>ESSID</option>
	<option value="3" <?php if(isset($_POST['dropdown'])){if($_POST['dropdown']== "3"){ echo 'selected'; }} ?>>Channel</option>
	<option value="5_7" <?php if(isset($_POST['dropdown'])){if($_POST['dropdown']== "5_7"){ echo 'selected'; }} ?>>Privacy Authentication</option>
<option value="5_7_6" <?php if(isset($_POST['dropdown'])){if($_POST['dropdown']== "5_7_6"){ echo 'selected'; }} ?>>Privacy Authentication Cipher</option>
		<option value="10" <?php if(isset($_POST['dropdown'])){if($_POST['dropdown']== "10"){ echo 'selected'; }} ?>>Packets</option>
		<option value="8" <?php if(isset($_POST['dropdown'])){if($_POST['dropdown']== "8"){ echo 'selected'; }} ?>>Signal</option>
		<option value="0_13" <?php if(isset($_POST['dropdown'])){if($_POST['dropdown']== "0_13"){ echo 'selected'; }} ?>>Clients</option>
		</select>
		
		
		<select id="chart_type" onChange="load_chart();" class="drop_col">
		<option value="column">Bar chart</option>
		<option value="pie">Pie Chart</option>
		</select>
		
		<!--<select class="drop_col">
		<option>Filtered Data</option>
		<option>All Networks</option>
		</select>-->
		
		
		</form>
		
		</div>
		
		<div class="txt_box2">
		<p class="include_top">Include Top</p>
		<input id="txt_type" type="text" name="text_box" class="text-box include_txt" value="6" onkeyup="load_chart();"/>
		</div>
			
		<!--<div class="chart_camera">
		<i class="fa fa-camera"></i>
		</div>-->
				
		</div>
   
  	</div>
</div>

<div class="load_chart">   
<div id="chartContainer" style="height: 350px; width: 100%;"></div>
</div>
