<?php
session_start();
if($_SESSION!=null)
{
//include_once('connection.php');
include_once('userHeader.php');
include_once('userFooter.php');
    include_once('database.php');
$db = new Database();

//$user=getUser();
//$pas=getPass();
//$db=getDb();
$id=$_REQUEST['del'];

$link = $db->openConnect();
$db->openDb();
$query= " delete  from comment where id='".$id."'";
mysql_query($query,$link);
?>
<script>
alert("comment deleted");
window.location="coment.php";
</script>

<?php
}
else
{
?>
<script>
alert("plz login first");
window.location="login.php";
</script>
<?php
}
?>
