<?php
session_start();
if($_SESSION!=null)
{
include_once('adminHeader.php');
include_once('userFooter.php');
headder();
?>
<script type="text/javascript">
function validate()
{
var newpass=document.getElementById("newpass").value;
if(!(newpass.length>0))
{
alert("please fill the new password");
return false;
}
}
</script>
<h3>Change Password</h3>
<form action="adminchange.php" method="post" onsubmit="return validate();">
<table align="center">
<tr>
<td>New Password:</td>
<td><input type="password" name="newpass" id="newpass"/></td>
</tr>
<tr>
<td>re-enter new password</td>
<td><input type="password" name="newpas" id="newpass"/></td>
</tr>
<tr >
<td colspan="2" align="center"><input type="submit" value="change"/> <input type="reset" value="cancel"/></td>
</tr>


</table>
</form>
<?php
footter();
}
else
{
?>
<script>
alert('log in 1st');
window.location="login.php";
</script>
<?php
}
?>