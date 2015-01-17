<?php
include_once('header.php');
include_once('footer.php');
include_once('database.php');
$db = new Database();
headder();
$link = $db->openConnect();
$db->openDb();
$url = $db->imageUrl();
$query="select imgPath,ModelName from products order by Rand() limit 8";
$restu = mysql_query($query,$link);
?>
<h1>Welcome to : <span>Laptop Gallery</span></h1>
<?php
while($ary=mysql_fetch_array($restu))
{
?>
<div id="front">
<table >
<tr>
<td><img src="uploads/<?php print $ary['imgPath']; ?>" alt="Laptop Gallery" width="180" height="150" /></td>
</tr>
<tr>
<td align="center"><?php print $ary['ModelName']; ?></td>
</tr>
</table>
</div>
<?php
}
footter();
?>