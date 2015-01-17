<?php
session_start();
if($_SESSION!=null)
{
include_once('adminHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();
$head=$_POST['head'];
$cntnt=$_POST['cntnt'];
$link = $db->openConnect();
$db->openDb();
$query="insert into news(newsheading,newscontent) values('".$head."','".$cntnt."')";
mysql_query($query,$link);
?>
<script>
alert('data added sucessfuly');
window.location="view_news.php";
</script>
<?php
footter();
}
else
{
?>
<script>
alert('plz login 1st');
window.location="login.php";
</script>
<?php
}
?>
