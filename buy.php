<?php
include_once("header.php");
include_once("footer.php");
headder();
?>

<script type="text/javascript">
function validate()
{
var name=document.getElementById("name").value;
if(!(name.length>0))
{
alert("please enter your name");
return false;
}

var mail=document.getElementById("mail").value;
if(!(mail.length>0))
{
alert("please enter your email id");
return false;
}

var address=document.getElementById("address").value;
if(!(address.length>0))
{
alert("please enter your address ");
return false;
}

var contact=document.getElementById("contact").value;
if(!(contact.length>0))
{
alert("please enter contact details");
return false;
}
}

</script>
<center>
<form method="post" action="aun_buy.php" onsubmit="return validate();">
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="name" id="name"/></td>
</tr>
<tr>
<td>Email Id :</td>
<td><input type="text" name="mail" id="mail"/></td>
</tr>
<tr>
<td>Address :</td>
<td><input type="text" name="address" id="address"/></td>
</tr>
<tr>
<td>Contact Details :</td>
<td><input type="text" name="contact" id="contact"/></td>
</tr>
<tr>
<td><input type="submit" style="width:100px; background-color:#5DDAE5;"/></td>
</tr>
</table>
</form>
</center>
<?php
footter();
?>