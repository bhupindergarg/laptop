<?php
session_start();
if($_SESSION!=null)
{
include_once('userHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();
$user=$_SESSION['username'];
?>
<h1>Edit Details</h1>
<table align="center">
     <form action="edit_aun.php" method="post">
      <?php
$link = $db->openConnect();
$db->openDb();
       $query = "select * from login where username='".$user."'";
       $result= mysql_query($query,$link);
       while($a = mysql_fetch_array($result))
       {
        print "<tr>";
        print "<td>new userName</td>";
        print "<td> : </td>";
        print "<td><input type='text' name='username' value='".$a['username']."' /></td>";
        print "</tr>";
        print "<tr>";
        print "<td>Email</td>";
        print "<td> : </td>";
        print "<td><input type='text' name='email' value='".$a['email']."' /></td>";
        print "</tr>";
        print "<tr>";
        print "<td>Mobile</td>";
        print "<td> : </td>";
        print "<td><input type='text' name='mobile' value='".$a['mobile']."' /></td>";
        print "</tr>";
        print "<tr>";
        print "<td colspan='3'> <input type='submit' value='update' /><input type='reset' value='cancel' /> </td>";     
        print "</tr>";
       
       }
      ?>
     </form>
    </table>
<?php
footter();
}
else
{
?>
<script>
alert('please login');
window.location="index.php";
</script>
<?php
}
?>