<?php
include_once('adminHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();
$me=$_REQUEST['company'];
$link = $db->openConnect();
$db->openDb();
$query = "select * from products where CompanyName='".$me."'";
$rest= mysql_query($query,$link);
while($ar = mysql_fetch_array($rest))
{
?>
<div id="me">
<table>
<tr>
<td><a href="edit_product.php?model=<?php print $ar['ModelName']; ?>" style="text-decoration:none;"><?php print "&nbsp&nbsp&nbsp&nbsp<img src='uploads/".$ar['imgPath']."' width=200 height=200 alt='image does not exist'/>";?></a></td>
</tr>
<tr>
<td align="center"><?php print $ar['ModelName']; ?></td>
</tr>
</table>
</div>
<?php
}
footter();
?>