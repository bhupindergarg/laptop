<?php
session_start();
include_once('header.php');
include_once('footer.php');
include_once('database.php');
$db = new Database();
headder();
$user=$_POST['username'];
$pass=$_POST['password'];

//$link=mysql_connect("localhost","root","") or die("could not open connection:".mysql_error());
//mysql_select_db("laptop_gallery") or die("could not open database:".mysql_error());
$link = $db->openConnect();
$db->openDb();
$query="select * from login where username='".$user."'";
$r=mysql_query($query,$link);
if(mysql_num_rows($r) > 0) {
    while($a=mysql_fetch_array($r))
    {
      $ps=$a['password'];
        $r=$a['role'];
        if($pass==$ps && $r=="admin")
        {

            $_SESSION['username']=$user;

    ?>
    <script type="text/javascript">
    alert("you have login successfully");
    window.location="adminhome.php";
    </script>


    <?php

        }
        else
        {
       if($pass==$ps)
    {

         $_SESSION['username']=$user;
    ?>
    <script type="text/javascript">
    alert("you have login successfully");
    window.location="home.php";
    </script>
    <?php

        }
        else
        {
    ?>

    <script type="text/javascript">
    alert("invalid username/password");
    window.location="login.php";
    </script>
    <?php

        }}

    }
} else {

            ?>

            <script type="text/javascript">
            alert("invalid username/password");
            window.location="login.php";
            </script>
            <?php
        }
footter();
?>
                                                        