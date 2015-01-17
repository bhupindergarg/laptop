<?php
session_start();
include_once('database.php');
$db = new Database();
$user=$_POST['username'];
$pass=$_POST['password'];

$link = $db->openConnect();
$db->openDb();
$query="select * from login where username='".$user."'";
$r=mysql_query($query,$link);
while($a=mysql_fetch_array($r))
{

      $ps=$a['password'];
 	if($pass==$ps)
	{
		
		$_SESSION['username']=$user;
                 
?>
<script type="text/javascript">
alert("you have login successfully");
window.location="editdetails.php";
</script>


<?php
		
	}
	else
	{
?>
<script type="text/javascript">
alert("invalid username/password");
window.location="index.php";
</script>
<?php

	}
}

?>
                                                        