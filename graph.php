<?php
require_once "config.php";
$ClassDbObj = new ClassDb();
$csvFile = 'csvfile/data.csv';
$csv = $ClassDbObj->readCSV($csvFile);
$aDatas = array();

		if(count($csv[2]) > 15)
		{
echo '<div class="graph_style">Please Upload Correct File</div>';		
		
		}
 	
 		else{

		foreach($csv as $cKey => $csvValue)
		{ 
	
		if(count($csv[$cKey]) > 13)
		 {
		 $mac = trim(str_replace(" ","",$csvValue[0]));
		  
		 $bssid = trim(str_replace(" ","",$csvValue[0]));
		 $essid = trim(str_replace(" ","",$csvValue[13]));
		    
		 if($essid != "")
		 {
		  $aDatas[$cKey]['label'] =$mac;
		  $aDatas[$cKey]['y'] = $essid."({$bssid})"; 
		 }
		 }
		 
		 else{
		 
		 
		 }
		 
		}
		
			}
 

array_multisort($aDatas,SORT_DESC);
	$arr2=array();
	foreach($aDatas as $ar)
	{
 	$arr2[]=$ar['y'];
 	}

$countarrayele=array_count_values($arr2);

?>

<style>
 #graph
 {
 	background-color:rgb(26, 188, 156);
 }
 .menu #graph a:hover
 {
 	color:white !important;
 }
 </style>


<?php function circleR($val){?>
<div  id="cetC" class="cetC star_heading">
<?php echo $val;?></div><?php }?>
<?php function circleG($val,$cls){?>
<div id="midC" class="midC star_blocks"><?php echo $cls; ?>
<?php echo $val;?></div><?php }?>


<?php 

	echo '<div class="row">';
	echo '<div class="container-fluid">';
	foreach($countarrayele as $key=>$asd){
	
	
	
	echo '<div class="circle-container">';
	circleR($key);
	echo '<div class="star_data">';
 	foreach($aDatas as $key2=>$ar1){
	

  		if($ar1['y']==$key&&$ar1['label']!="")
		{
   		$style="";
   		circleG($ar1['label'],$style); 
 		}
	}
 	echo '</div></div>';
	}
	echo '</div>';
	echo '</div>';
?>