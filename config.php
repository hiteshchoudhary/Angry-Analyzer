<?php
error_reporting(E_ALL);
ob_start();
session_start();

$root_path = dirname(__file__);

$aClasses = glob($root_path."/classes/*class.php");

if($aClasses)
{
	foreach($aClasses as $aClasse)
	{
		require_once $aClasse;
	}
}


?>