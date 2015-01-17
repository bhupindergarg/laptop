<?php
include_once('adminHeader.php');
include_once('userFooter.php');
headder();
?><br/><br/>
<table align="center">
<form action="deletenews.php" method="post">
<tr>
<td style="font-size:20px;">news heading:</td>
<td><input type="text" name="heading"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="delete"/></td>
</tr>
</form>
</table>
<?php
footter();
?>