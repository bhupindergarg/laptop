<?php
include_once('userHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();
$comp=$_POST['comp'];
$model=$_POST['model'];
$ram=$_POST['ram'];
$hdd=$_POST['hdd'];
$display=$_POST['display'];
$gcard=$_POST['gcard'];
$os=$_POST['os'];
$processor=$_POST['processor'];
$webcam=$_POST['webcam'];
$bluetooth=$_POST['bluetooth'];
$wifi=$_POST['wifi'];
$dvdwriter=$_POST['dvdwriter'];
$audio=$_POST['audio'];
$additional=$_POST['additional'];
$price=$_POST['price'];
$link = $db->openConnect();
$db->openDb();
$query="update  products set CompanyName='".$comp."', Ram='".$ram."', Hdd='".$hdd."', Display='".$display."', GraphocCard='".$gcard."',Processor='".$processor."',Os='".$os."',Webcam='".$webcam."',Bluetooth='".$bluetooth."',Wifi='".$wifi."',DVDWriter='".$dvdwriter."',Audio='".$audio."',additional='".$additional."',price=".$price." where ModelName='".$model."';
mysql_query($query,$link);
mysql_close($link);
footter();
?>