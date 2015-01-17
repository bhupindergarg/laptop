<?php
session_start();
if($_SESSION!=null)
{
include_once('header.php');
include_once('footer.php');
include_once('database.php');
$db = new Database();
headder();
?>

<?php
$user=$_SESSION['username'];
$nwpass=$_POST['newpass'];
$nwpas=$_POST['newpas'];
if($nwpas==$nwpass)
{
$link = $db->openConnect();
$db->openDb();
$query="update login set password='".$nwpass."' where username='".$user."'";
	mysql_query($query,$link);
	mysql_close($link);
?>
<script>
alert("password changed");
window.location="adminhome.php";
</script>

<?php
footer();
}
else
{
?>
<script>
alert('password not match');
window.location="adminpasswrdchng.php";
</script>
<?php
}
}
else
{
?>
<script >
alert('please login 1st');
window.location="main.php";
</script>
<?php
}
?>