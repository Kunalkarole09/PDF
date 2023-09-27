<?php
$file = $_GET['file'].".pdf";
header("content-disposition: attachtemt; filename=".urlencode($file))
$fb =fopen($file, "r")
while(!feof($fb0)){
    echo fread ($fb, 8192);
    fluch();
}
fclose($fb);
?>