<?php
session_start();
include_once('userHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();
?>
<?php
$user=$_SESSION['username'];
$comm=$_POST['comm'];
$link = $db->openConnect();
$db->openDb();
$query="insert into comment(username,comm,dat,tim) values('".$user."','".$comm."',now(),now())";
mysql_query($query,$link);
?>
<script>

window.location="comment.php";
</script>
<?php
footter();
?>
