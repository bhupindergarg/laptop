<?php
session_start();
if($_SESSION!=null)
{
include_once('adminHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();
$user=$_SESSION['username'];
?>
<h1>Personal Details</h1>

<table border="1" align="center">
<tr>

<td style="font-size:18px;">Username</td>
<td style="font-size:18px;">Password</td>
<td style="font-size:18px;">Security Ques</td>
<td style="font-size:18px;">Answer</td>
<td style="font-size:18px;">Role</td>
<td style="font-size:18px;">Email Id</td>
<td style="font-size:18px;">Mobile</td>
</tr>
           <?php
$link = $db->openConnect();
$db->openDb();
       $query = "select * from login";
       $result= mysql_query($query,$link);
       while($a = mysql_fetch_array($result))
       {
        print "<tr>";
   print "<td style='font-size:15px;'>".$a['username']."</td>";
   print "<td style='font-size:15px;'>".$a['password']."</td>";
   print "<td style='font-size:15px;'>".$a['question']."</td>";
   print "<td style='font-size:15px;'>".$a['answer']."</td>";
   print "<td style='font-size:15px;'>".$a['role']."</td>";
   print "<td style='font-size:15px;'>".$a['email']."</td>";
   print "<td style='font-size:15px;'>".$a['mobile']."</td>";
     print "</tr>";  
               
}
      ?>
   
    </table>
<br/>
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