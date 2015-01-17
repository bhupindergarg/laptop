<?php
include_once('header.php');
include_once('footer.php');
include_once('database.php');
$db = new Database();
headder();
$search=$_POST['search'];
$link = $db->openConnect();
$db->openDb();
  $query = "select * from products where companyName  like '%".$search."%'";
$restu = mysql_query($query,$link);
 while($ar = mysql_fetch_array($restu))
{ ?>
<div id="me">
<table>
<tr>
<td><a href="desc.php?model=<?php print $ar['ModelName']; ?>" style="text-decoration:none;"><?php print "&nbsp&nbsp&nbsp&nbsp<img src='uploads/".$ar['imgPath']."' width=200 height=200 alt='image does not exist'/>";?></a></td>
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