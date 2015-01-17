<?php
include_once('header.php');
include_once('footer.php');
include_once('database.php');
$db = new Database();
headder();
$user=$_POST['user'];
$feed=$_POST['feed'];
$link = $db->openConnect();
$db->openDb();
$query="insert into fdbck values('".$user."','".$feed."')";
mysql_query($query,$link);
?>
<script>
alert("details saved successfully");
window.location="index.php";
</script>
<?php
footter();
?>
