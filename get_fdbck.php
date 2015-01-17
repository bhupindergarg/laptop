<?php
session_start();
if($_SESSION!=null)
{
include_once('adminHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();
?>

<table border="2" align="center" style="font-size:20px;" cellpadding=15 cellspacing=10>
<tr>
<td style="font-size:25px;">Username</td>
<td style="font-size:25px;">feedback</td>
</tr>
           <?php
$link = $db->openConnect();
$db->openDb();
       $query = "select * from fdbck";
       $result= mysql_query($query,$link);
       while($a = mysql_fetch_array($result))
       {
        print "<tr>";
   print "<td style='font-size:15px;'>".$a['username']."</td>";
   print "<td style='font-size:15px;'>".$a['feedback']."</td>";
  print "</tr>";               
       }
      ?>
   
    </table>
<a href="add.php">back</a>
<?php
footter();
}
else
{
?>
<script>
alert('please login 1st');
window.location="login.php";
</script>
<?php
}
?>