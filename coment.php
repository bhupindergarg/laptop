<?php
session_start();
include_once('adminHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();
$link = $db->openConnect();
$db->openDb();
$query="select * from comment";
$r=mysql_query($query,$link);
$user=$_SESSION['username'];
?>
<table align="left">
<?php
while($a=mysql_fetch_array($r))
{
?>
<tr>
<td style="border: 2px solid #000; padding-left: 7px;padding-right: 7px; color:#f5f5f5; font-size: 18px;"><?php print $a['username'];?><br/><span style="font-size:10px;"><?php print $a['dat'];?><br/><?php print $a['tim'];?></span.</td>
<td style="border: 2px solid #000; padding-left: 7px; font-size:14px;"><?php print $a['comm'];?></td><td style="border: 2px solid #000; padding-left: 7px; font-size:14px;"><a href="deletecoment.php?del=<?php print $a['id']; ?>">delete comment</a></td>
</tr>
<?php
}
if($_SESSION['username']!=null);
{
?>

<?php
}
?>
</table>
<?php
footter();
?>