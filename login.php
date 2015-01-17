<?php
include_once('header.php');
include_once('footer.php');
headder();
?>
<script type="text/javascript">
function validate()
{
var un=document.getElementById("un").value;
if(!(un.length>0))
{
alert("please enter user name ");
return false;
}

var psw=document.getElementById("psw").value;
if(!(psw.length>0))
{
alert("please enter password");
return false;
}
}
</script>
<br/><br/>
<center><h1><span>Login</span></h1>
<br/>
<form action="authenticate.php" method="post" onsubmit="return validate();">
<table>
<tr>
<td>Username</td>
<td> : </td>
<td><input type="text" id="un" name="username" /></td>
</tr>
<tr>
<td>Password</td>
<td> : </td>
<td><input type="Password" id="psw" name="password" /></td>
</tr>
<tr>
<td colspan='3' align='center'> <input type="submit" value="Login" /> </td>
</tr>

</table>
</form>
</center>

<?php
footter();
?>