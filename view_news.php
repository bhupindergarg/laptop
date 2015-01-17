<?php
session_start();
if($_SESSION!=null)
{
include_once('adminHeader.php');
include_once('userFooter.php');
headder();
?>
<center>
<table cellpadding=20px cellspacing=20px>

<tr>
<td><a href="get_date_delete.php">delete news</a></td>

<td><a href="get_news_frm_user.php">add news</a></td>
<td></td>
<td><a href="add.php">back</a></td>
</tr>
</table>
</center>
<?php
footter();
}
else
{
?>
<script>
alert('please login 1st');
window.location="login.php";
</script>
<?php
}
?>