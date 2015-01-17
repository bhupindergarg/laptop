<?php
session_start();
if($_SESSION!=null)
{
include_once('header.php');
include_once('footer.php');
include_once('database.php');
$db = new Database();
headder();
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$nuser=$_POST['username'];
$user=$_SESSION['username'];
$link = $db->openConnect();
$db->openDb();
$query = "update login set email='".$email."',mobile='".$mobile."',username='".$nuser."' where username='".$user."'";
mysql_query($query,$link);
?>
<script >
alert('DetailsUpdated Successfully');
window.location="editdetails.php";
</script>
<?php
footer();
}
else{
?>
<script type="text/javascript">
alert('please login 1st');
window.location="main.php";
</script>
<?php
}
?>