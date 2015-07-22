<?php
class ClassDb
{


	public function readCSV($csvFile){
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle) ) {
	$line_of_text[] = fgetcsv($file_handle, 1024);
	}
	fclose($file_handle);
	unset($line_of_text[0]);
	unset($line_of_text[1]);
	return $line_of_text;
	}
	
	
	
	function getFieldArray($array,$fieldno)
	{
		//$fieldArray = array();
		
		$dubArray = array();
		
		foreach($array as $arr)
		{
			if($arr)
			{
			if(array_key_exists($fieldno,$arr))
				{
				if(trim($arr[$fieldno]) != "")
				$dubArray[] = $arr[$fieldno];
				}
						
			}
		}
			
		$arr1=array_count_values($dubArray);
		return $arr1;
		
	}
		
	
	
	
	function getcolArray($array,$fieldno,$fieldno2)
	{
		
		$dubArray = array();
		
		foreach($array as $arr)
		{
			if($arr)
			{
			if(array_key_exists($fieldno,$arr))
				{
						
				
				if(trim(isset($arr[$fieldno])) != "" && trim(isset($arr[$fieldno2])) != "")
				$dubArray[] = $arr[$fieldno].'-'.$arr[$fieldno2];
				
				}
						
			}
		}
		
	
		$arrnew=array_count_values($dubArray);
		//print_r($arrnew);
		return $arrnew;
		
	}
	
	
	
	
	function getcolcolArray($array,$fieldno,$fieldno2,$fieldno3)
	{
		
		$dubArray = array();
		
		foreach($array as $arr)
		{
			if($arr)
			{
			if(array_key_exists($fieldno,$arr))
				{
			
			if(trim(isset($arr[$fieldno])) != "" && trim(isset($arr[$fieldno2])) != "" && trim(isset($arr[$fieldno3]))!= "" )
				$dubArray[] = $arr[$fieldno].'-'.$arr[$fieldno2].'-'.$arr[$fieldno3];
				}
						
			}
		}
		
		
		
		$arrnew=array_count_values($dubArray);
		return $arrnew;
	}
	
	
	function getSignalData($csv,$limit = 6)
	{
		$newArray = array();
		if($csv)
		{
		
			$aDatas = array();
			foreach($csv as $cKey => $csvValue)
			{	
			
			if(count($csv[$cKey]) > 13)
		 		{
				
				
				$bssid = trim(str_replace(" ","",$csvValue[0]));
				$essid = trim(str_replace(" ","",$csvValue[13]));
				$power = trim(str_replace(" ","",$csvValue[8])); 
				
				if($essid != "" && (int)$power != 0)
				{
					//$aDatas[] = array("y"=>(int)$power,"label"=>$essid."({$bssid})" );
					$aDatas[] = array("y"=>(int)$power,"label"=>$essid);
					
					
				}
				}
				
				else{
				
				}
			}
			
			array_multisort($aDatas,SORT_DESC);
			$newArray = array_slice($aDatas, 0, $limit);
		}
		
		return $newArray;
	}
		
		
		
	function getPacketData($csv,$limit = 6)
	{
		$newArray = array();
		if($csv)
		{
			$aDatas = array();
			foreach($csv as $cKey => $csvValue)
			{	
				
				if(count($csv[$cKey]) > 13)
		 		{
				
				
				$bssid = trim(str_replace(" ","",$csvValue[0]));
				$essid = trim(str_replace(" ","",$csvValue[13]));
				$packets = trim(str_replace(" ","",$csvValue[10]));
				//$packets = trim(str_replace(" ","",$csvValue[19])); 
			
				if($essid != "")
				{
				
					$aDatas[] = array("y"=>(int)$packets,"label"=>$essid."({$bssid})");
				}
				}
				else{
				
				}
			}
			
			array_multisort($aDatas,SORT_DESC);
			$newArray = array_slice($aDatas, 0, $limit);
		}
		
		return $newArray;
	}		
	
	
}
?>