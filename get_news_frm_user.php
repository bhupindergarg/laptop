<?php
session_start();
include_once('adminHeader.php');
include_once('userFooter.php');
headder();
if($_SESSION!=null)
{
?>
<h2 style="font-size:20px;">Add News</h2>
<form action="addnews.php" method="post">
<table align="cemter">
<tr>
<th style="font-size:18px;">news heading</th>
<td align="top"><input type="text" name="head"/></td>
</tr>
<tr>
<th style="font-size:18px;">content</th>
<td><textarea cols="30" rows="10" name="cntnt"></textarea></td>
</tr>
<tr><td></td>
<td>
<input type="submit" value="add"/><input type="reset" value="cancel"/>
</td>
</tr>
</table>
</form>
<?php
}
footter();
?>