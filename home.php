<?php
session_start();
include_once('userHeader.php');
include_once('userFooter.php');
headder();
?>
<h1>Welcome : <span><?php print $_SESSION['username']; ?></span></h1>
<?php
footter();
?>