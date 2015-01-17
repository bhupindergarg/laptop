<?php
include_once('userHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();
$heading=$_POST['heading'];
if($heading!=null)
{
$link = $db->openConnect();
$db->openDb();
$query="delete  from news where newsheading='".$heading."'";
mysql_query($query, $link);
?>
<script>
alert('news deleted');
window.location="view_news.php";
</script>
<?php
footter();
}
else{
?>
<script>
alert('enter news heading first');
window.location="get_date_delete.php";
</script>
<?php
}
?>
