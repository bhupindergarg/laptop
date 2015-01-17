<?php
include_once('header.php');
include_once('footer.php');
include_once('database.php');
$db = new Database();
headder();
$a=$_POST['price'];
$m=count($a);
if($m!=0)
{
	
foreach($a as $v)
{
//	print $v."<br/>";
	$c=explode("-",$v);
$me=count($c);
	
//	print $d."<br/>";
$link = $db->openConnect();
$db->openDb();
  $query = "select * from products where price  between '".$c[0]."' AND '".$c[1]."'";
  $restu = mysql_query($query,$link);
  
 while($ar = mysql_fetch_array($restu))
{
	?>
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

	
}
}
else
{
print "Please Select checkbox first";
}
	footter();
?>