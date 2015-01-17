<?php
session_start();
include_once('adminHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();
$user=$_SESSION['username'];
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
$source = $_FILES['fyl']['tmp_name'];
$target = "uploads/".basename($_FILES['fyl']['name']);
$fylname = $_FILES['fyl']['name'];
move_uploaded_file( $source, $target ) or die ("Couldn't copy");
$link = $db->openConnect();
$db->openDb();
$query="insert into products(CompanyName,ModelName,Ram,Hdd,Display,GraphocCard,Processor,OS,Webcam,Bluetooth,Wifi,DVDWriter,Audio,Additional,Price,imgPath) values('".$comp."','".$model."','".$ram."','".$hdd."','".$display."','".$gcard."','".$processor."','".$os."','".$webcam."','".$bluetooth."','".$wifi."','".$dvdwriter."','".$audio."','".$additional."',".$price.",'".$fylname."')";
mysql_query($query,$link) or die("Could not execute command : ".mysql_error());
?>
<script>
alert("product added");
window.location="add.php";
</script>

<?php
footter();

?>