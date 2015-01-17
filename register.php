<?php
include_once('header.php');
include_once('footer.php');
headder(); 
?>
<center><h1><span>Registration Form</span></h1>
<form action="regUser.php" method="post">
<table>
<tr>
<td>Username</td>
<td> : </td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Password</td>
<td> : </td>
<td><input type="Password" name="password" /></td>
</tr>
<tr>
<td>Confirm<br/>Password</td>
<td> : </td>
<td><input type="password" name="confirm" /></td>
</tr>
</table>
<br/>
<hr/>
<br/>
<table>
<tr>
<td>Full Name</td>
<td> : </td>
<td><input type="text" name="fullname" /></td>
</tr>
<tr>
<td>Address</td>
<td> : </td>
<td><textarea rows='5' cols='17' name="address"></textarea></td>
</tr>
<tr>
<td>Mobile</td>
<td> : </td>
<td><input type="text" name="mobile" /></td>
</tr>
<tr>
<td>Email</td>
<td> : </td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td colspan='3' align='center'> <input type="submit" value="Register" /> <input type="reset" value="Reset" /> </td>
</tr>

</table>
</form>
</center>
<?php
footter();
?>