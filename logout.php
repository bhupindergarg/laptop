<?php
session_start();
$_SESSION['username']=null;
session_destroy();
$_SESSION=array();
?>
<script type="text/javascript">
alert("You have been successfully Logged Out");
window.location="login.php";
</script>