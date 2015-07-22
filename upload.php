<?php
if($_FILES['csv']['name'])
{
	move_uploaded_file($_FILES['csv']['tmp_name'],"csvfile/data.csv");
	
	echo "<script>window.parent.load_file('home.php'); </script>";
	
}
if($_POST['text_box'])
{

$a=$_POST['text_box'];
	if ( copy($a, "csvfile/data.csv") ) {
	   echo "<script>window.parent.load_file('home.php'); </script>";
	}
}
?>