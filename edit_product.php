<?php
include_once('adminHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();
$m=$_REQUEST['model'];
$link = $db->openConnect();
$db->openDb();
$query="select * from products where ModelName='".$m."'";
$r=mysql_query($query,$link);
while($ar=mysql_fetch_array($r))
{
?>
<table>
<form method="post" action="edit_product_aun.php">
<?php
print "<tr>";
print "<td> Company Name </td>";
print "<td><input type='text' name='comp' value='".$ar['CompanyName']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Model Name </td>";
print "<td><input type='text' name='model' value='".$ar['ModelName']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Ram </td>";
print "<td><input type='text' name='ram' value='".$ar['Ram']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Hdd </td>";
print "<td><input type='text' name='hdd' value='".$ar['Hdd']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Display </td>";
print "<td><input type='text' name='display' value='".$ar['Display']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Gcard </td>";
print "<td><input type='text' name='gcard' value='".$ar['GraphocCard']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Operating System </td>";
print "<td><input type='text' name='os' value='".$ar['Os']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Processor </td>";
print "<td><input type='text' name='processor' value='".$ar['Processor']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Web Cam </td>";
print "<td><input type='text' name='webcam' value='".$ar['Webcam']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Bluetooth </td>";
print "<td><input type='text' name='bluetooth' value='".$ar['Bluetooth']."'/></td>";
print "</tr>";
print "<tr>";
print "<td>Wifi </td>";
print "<td><input type='text' name='wifi' value='".$ar['Wifi']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> DVD Writer </td>";
print "<td><input type='text' name='dvdwriter' value='".$ar['DVDWriter']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Audio </td>";
print "<td><input type='text' name='audio' value='".$ar['Audio']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Price </td>";
print "<td><input type='text' name='price' value='".$ar['price']."'/></td>";
print "</tr>";
print "<tr>";
print "<td> Additional </td>";
print "<td><textarea  name='additional'>'".$ar['additional']."'</textarea></td>";
print "</tr>";
print "<tr >";
print "<td colspan='2' align='center'><input type='submit' value='update'/> <input type='reset' value='cancel'/></td>";
print "</tr>";
?>
</form>
</table>
<?php
}
mysql_close($link);
footter();
?>
