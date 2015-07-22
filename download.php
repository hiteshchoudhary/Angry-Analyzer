<?php
$img = imagegrabscreen();
imagepng($img, 'screenshot.png');

$filename = "screenshot.png";
header ("Content-type: octet/stream");   
header ("Content-disposition: attachment; filename=".$filename.";");    
header("Content-Length: ".filesize($filename));     
readfile($filename); 
 
?>