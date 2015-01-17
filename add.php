<?php
session_start();
include_once('adminHeader.php');
include_once('userFooter.php');
headder();
if($_SESSION!=null)
{
$ab= <<< EOH
<center>
<table  cellspacing="20" cellpadding="25">

<tr>
<td><a href="enter_company.php">add new product</a></td>
<td><a href="view.php">view details</a></td>
</tr>
<tr>
<td><a href="get_fdbck.php">feedback</a></td>
<td><a href="view_news.php">edit news</a></td>
</tr>
<tr>
<td><a href="coment.php">delete comments</a></td>
<td><a href="admin_companyname.php">view added products</a></td>
</tr>
</table></center>
EOH;
print $ab;
footter();
}
else{
?>
<script>
alert('please login 1st');
window.location="login.php";
</script>
<?php
}?>