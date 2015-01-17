<?php
include_once('header.php');
include_once('footer.php');
include_once('database.php');
$db = new Database();
headder();
$meb=$_REQUEST['model'];
$linkb = $db->openConnect();
$db->openDb();
$queryb = "select * from products where ModelName='".$meb."'";
$restb= mysql_query($queryb,$linkb);
while($arb = mysql_fetch_array($restb))
{
?>
<form method="post" action="buy.php">
<center>
<table>
<tr>
<td><?php print "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src='uploads/".$arb['imgPath']."' width=250 height=250 alt='image does not exist'/>";?></td>
</tr>
<tr>
<td>company Name : </td>
<td><?php print $arb['CompanyName']; ?></td>
</tr>
<tr>
<td>model Name : </td>
<td><?php print $arb['ModelName']; ?></td>
</tr>
<tr>
<td>ram : </td>
<td><?php print $arb['Ram']; ?></td>
</tr>
<tr>
<td>hard disk : </td>
<td><?php print $arb['Hdd']; ?></td>
</tr>
<tr>
<td>graphic card : </td>
<td><?php print $arb['GraphocCard']; ?></td>
</tr>
<tr>
<td>processor : </td>
<td><?php print $arb['Processor']; ?></td>
</tr>
<tr>
<td>operating system : </td>
<td><?php print $arb['Os']; ?></td>
</tr>
<tr>
<td>webcam : </td>
<td><?php print $arb['Webcam']; ?></td>
</tr>
<tr>
<td>bluetooth : </td>
<td><?php print $arb['Bluetooth']; ?></td>
</tr>
<tr>
<td>wifi : </td>
<td><?php print $arb['Wifi']; ?></td>
</tr>
<tr>
<td>DVD writer : </td>
<td><?php print $arb['DVDWriter']; ?></td>
</tr>
<tr>
<td>audio : </td>
<td><?php print $arb['Audio']; ?></td>
</tr>
<tr>
<td>price : </td>
<td><?php print $arb['price']; ?></td>
</tr>
<tr>
<td>additional : </td>
<td><?php print $arb['additional']; ?></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Buy" style="width:100px; background-color:#5DDAE5;"/></td>
</tr>
</table>
</center>
</form>
 <?php
}
mysql_close($linkb);
footter();
?>