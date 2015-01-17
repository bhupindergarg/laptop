<?php
session_start();
include_once('userHeader.php');
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
<td style="border: 2px solid #000; padding-left: 7px; font-size:14px;"><?php print $a['comm'];?></td>
</tr>
<?php
}
if($_SESSION['username']!=null);
{
?>
<form action="comment_aun.php" method="post">
<tr>
<td style='font-size:18px;'><?php print $user;?></td>
<td><input type="text" class="inp" name="comm" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="comment" /></td>
</tr>
</form>
<?php
}
?>
</table>
<?php
footter();
?>