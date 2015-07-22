<?php
require_once "config.php";
$ClassDbObj = new ClassDb();
$csvFile = 'csvfile/data.csv';

$csv = $ClassDbObj->readCSV($csvFile);


$chart_name = "5";
$chart_type = "column";
$chart_title = "Chart";
$txt_type = "5";

if(isset($_REQUEST['chart_name']))
{
	$chart_name = $_REQUEST['chart_name'];
}

if(isset($_REQUEST['chart_name']))
{
	$chart_type = $_REQUEST['chart_type'];
}

if(isset($_REQUEST['txt_type']))
{
if($_REQUEST['txt_type']!="")
{
$txt_type = $_REQUEST['txt_type'];
}
	
}



$privacyArray =$ClassDbObj->getFieldArray($csv,$chart_name);

//$newArray=$ClassDbObj->getFieldArray($csv,$chart_name);



$vals= explode('_',$chart_name);
	
if(count($vals)==1)
{
$privacyArray =$ClassDbObj->getFieldArray($csv,$vals[0]);
}

if(count($vals)==1)
{
$newArray =$ClassDbObj->getFieldArray($csv,$vals[0]);
}


if(count($vals)==2)
{
$privacyArray =$ClassDbObj->getcolArray($csv,$vals[0],$vals[1]);

}


if(count($vals)==3)
{
$privacyArray = $ClassDbObj->getcolcolArray($csv,$vals[0],$vals[1],$vals[2]);
}




$i=0;
$array = array();


foreach($privacyArray as $aKey => $aRow){
if($i==$txt_type)
{
break;
}

	else
	{	
	
	$array[] = array("label"=>$aKey,"y"=>$aRow);
	$i++;
	}
	
	
}



if($chart_name == 8)
{
	$array = $ClassDbObj->getSignalData($csv,$txt_type);
}


if($chart_name == 10)
{
	$array = $ClassDbObj->getPacketData($csv,$txt_type);
}




echo json_encode(array("chart_type"=>$chart_type,"chart_title"=>$chart_title,"array"=>$array));
?>
  