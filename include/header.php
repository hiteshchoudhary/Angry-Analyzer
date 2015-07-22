<?php
require_once "config.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Airodump</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">	
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/html2canvas.js"></script>
	<script src="js/jquery.plugin.html2canvas.js"></script>
	
  </head>
  <body>
  <!--<div class="div2">
   </div>-->
   
   <div id="targ" class="container-fluid">
   		<div class="row">
   		<div class="col-md-12">
   			<!--<h3 class="projct_name">Angry Analizer</h3>-->
		<img src="image/logo3.png" class="projct_logo">
		</div>
	   </div>
	   <div class="row">
   		<div class="col-md-12">
   			<h3 class="projct_head">by Hitesh Choudhary</h3>
		</div>
	   </div>
   	
   
   <div class="row">
   <div class="col-md-12">
   <div class="nav">
   		<div class="col-md-7"> 
    	<ul class="menu">
			<li id="networks"><a id="net_show" href="javascript:void(0);" onClick="load_file1('home.php');">Networks</a></li>
		<li id="roaming_clients"><a id="rom_client" href="javascript:void(0);" onClick="load_file1('roaming_clients.php');">Roaming Clients</a></li>
			<li id="charts"><a href="javascript:void(0);" onClick="load_file1('charts.php');">Charts</a></li>
			<li id="graph"><a href="javascript:void(0);" onClick="load_file1('graph.php');">Graph</a></li>
			<li id="rawdata"><a href="javascript:void(0);" onClick="load_file1('raw_data.php')">Raw Data</a></li>
		</ul>
	
    	</div>
   
   		<div class="col-md-5">
		
   	
		
		<div class="camera icons_hover">
		<!--<a id="ic" href="javascript:void(0);" onClick="capture();" style="color:#FFF;"><i class="fa fa-camera"></i></a>-->
		<a id="ic" href="download.php"  style="color:#FFF;"><i class="fa fa-camera"></i></a>
		</div>
		
		<!--<div class="toggle icons_hover">
		<i class="fa fa-plus-circle"></i>
		</div>-->
   
  		</div>
   </div>
   </div>
   </div> 
   
   <script>
   function load_file1(str)
	{	
	jQuery(".popup_wrapper").hide();
	$( ".load_file" ).load( str );

	} 

</script>
<script>
function capture() {
window.print();
}

</script>


<script>


function captu()
{
//document.getElementById("ic").addEventListener("change",false)

var bodyEle = $("#ic").get(0);
//alert("fdgfh");

if(bodyEle.addEventListener){

//alert("gffdg");

   bodyEle.addEventListener("click", function(){},true);
   
  alert("ghh");
}else if(bodyEle.attachEvent){


   document.attachEvent("onclick", function(){
       var event = window.event;
   });
}
}
</script>




