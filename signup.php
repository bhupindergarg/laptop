<?php
include_once('header.php');
include_once('footer.php');
headder();
?>
<script type="text/javascript">
function validate()
{
var username=document.getElementById("username").value;
if(!(username.length>0))
{
alert("please fill up the details");
return false;
}
var password=document.getElementById("password").value;
if(!(password.length>0))
{
alert("please fill up the details");
return false;
}

var email=document.getElementById("email").value;
if(!(email.length>0))
{
alert("please fill up the details");
return false;
}
var mobile=document.getElementById("mobile").value;
if(!(mobile.length>0))
{
alert("please fill up the details");
return false;
}
var ques=document.getElementById("ques").value;
if(!(ques.length>0))
{
alert("please fill up the details");
return false;
}
var ans=document.getElementById("ans").value;
if(!(ans.length>0))
{
alert("please fill up the details");
return false;
}
}
</script>
<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRegistration Form</h1>
<form action="aun.php" method="post" onsubmit="return validate();">
<table align="center">
<tr>
<td>Username:</td>
<td><input type="text" class="inp" name="user" id="username"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" class="inp" name="pass" id="password"/></td>
</tr>
<tr>
<td>Email Address:</td>
<td><input type="text" class="inp" name="email" id="email"/></td>
</tr>
<tr>
<td>Mobile no.:</td>
<td><input type="text" class="inp" name="mob" id="mobile"/></td>
</tr>

<tr>
<td>Security Question:</td>
<td><select name="ques" id="ques">
	<option ></option>
	<option value="what is your first childhood name">what is your first childhood name?</option>
	<option value="when your spouse birthday comes">when your spouse's birthday comes?</option>
	<option value="what is your first car no.">what is your first car's no.?</option>
	<option value="what is your bank account no.">what is your bank account no.?</option>
	<option value="what is your favourite color">what is your favourite color?</option></td>
</tr>
<tr>
<td>Answer:</td>
<td><input type="password" class="inp" name="ans" id="ans"/></td>
</tr>
<tr >
<td colspan="2" align="center"><input type="submit" value="save"/> <input type="reset" value="cancel"/></td>
</tr>

</table>
</form>
<?php
footter();
?>