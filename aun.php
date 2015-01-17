<?php
include_once('header.php');
include_once('footer.php');
include_once('database.php');
$db = new Database();
headder();
?>
<?php
footter();
?>
<?php
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$ques=$_POST['ques'];
$ans=$_POST['ans'];
$link = $db->openConnect();
$db->openDb();
$query="insert into login values('".$user."','".$pass."','".$ques."','".$ans."','member','".$mob."','".$email."')";
mysql_query($query,$link);
?>
<script>
alert("details saved successfully");
window.location="index.php";
</script>