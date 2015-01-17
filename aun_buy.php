<?php
include_once("header.php");
include_once("footer.php");
include_once('database.php');
$db = new Database();

$name=$_POST['name'];
$mail=$_POST['mail'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$link = $db->openConnect();
$db->openDb();
$query="insert into booking(name,mail,address,contact) values('".$name."','".$mail."','".$address."','".$contact."')";
mysql_query($query,$link);
?>
<script>
alert("thanx for shoping online");
window.location="index.php";
</script>
