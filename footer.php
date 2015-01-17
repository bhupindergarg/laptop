<?php
function footter()
{
 $hheadder= <<< EOH
		</div>
<div class="post_box pb_last">
            <div class="cleaner"></div>
        </div>
    
    </div>
    
    <div id="templatemo_sidebar">
	<!-------------------------------  Search ------------------------------------------------------------------------------------------->
	<div class="sidebar_box">
        	<h3>Search</h3>
            <div class="sb_content">
			<form action="search.php" method="post">
          <input type="text" name="search" />
		  <input type="submit" value="Search" />
		  </form>
            </div>
        </div>
	<!----------------------------------------------------------------------------------------------------------- ---------------->
    	<div class="sidebar_box">
        	<h3>News Update</h3>
            <div class="sb_content">
            <marquee direction="up" onmouseover="stop();" onmouseout="start();">
EOH;
print $hheadder;

            	
                     $linka = mysql_connect("sql211.0fees.us","0fe_15490448","991472034525") or die("Could not connect : ".mysql_error());
                    mysql_select_db("0fe_15490448_laptop_gallery") or die("Could not select db : ".mysql_error());
                    $querya = "select newsHeading,newsContent from news order by id desc limit 5";
                    $resta= mysql_query($querya,$linka) or die("Could not execute".mysql_error());
                    while($ara = mysql_fetch_array($resta))
                   {
                    print "<h4>".$ara['newsHeading']."</h4>";
                    print $ara['newsContent']."<br/><br/>";
                   }
                    mysql_close($linka);
$hheaddder= <<< EOH
             </marquee>
            </div>
        </div>
        
        <div class="sidebar_box">
        	<h3>Companies</h3>
            <div class="sb_content">
            	<ul class="sidebar_menu">
EOH;
print $hheaddder;
                    
                     $link = mysql_connect("sql211.0fees.us","0fe_15490448","991472034525") or die("Could not connect : ".mysql_error());
                    mysql_select_db("0fe_15490448_laptop_gallery") or die("Could not select db : ".mysql_error());
                    $query = "select distinct(CompanyName) from products";
                    $rest= mysql_query($query,$link);
                     while($ar = mysql_fetch_array($rest))
                 {
                    print "<a href='products.php?company=".$ar['CompanyName']."'>".$ar['CompanyName']."</a><br/>";
                 }
                                     
                    mysql_close($link);               
$hhhheadder= <<< EOH
                </ul>
            </div>
        </div>
        
        	<!-------------------------------  checkboxes ------------------------------------------------------------------------------------->
	<div class="sidebar_box">
        	<h3>Search</h3>
            <div class="sb_content">
			<form action="check.php" method="post">
          <input type="checkbox" value="25000-35000" name="price[]"/> 25000-35000<br/><br/>
          <input type="checkbox" value="35000-45000" name="price[]" /> 35000-45000	<br/>	<br/>  
		  <input type="checkbox" value="45000-55000" name="price[]"/> 45000-55000	<br/>  <br/>
		  <input type="checkbox" value="55000-70000" name="price[]"/> 55000-70000	<br/>  <br/>
		  <input type="submit" value="Search" />
		  </form>
            </div>
        </div>
	<!----------------------------------------------------------------------------------------------------------- ---------------->
        

    </div>
    
    <div class="cleaner"></div>
</div> <!-- end of main -->


<div id="templatemo_footer">

	<ul class="footer_menu">
        <li class="first"><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Feedback</a></li>
        <li><a href="signup.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="#">Contact</a></li>
	</ul>
    
	Copyright &copy; 2014 Created By Er. Bhupinder Garg
        <!----   <a href="index.php">Laptop Gallery</a> | 
<a href="#" target="_parent">Feedback</a> |
   <a href="#">Contact</a>   ------>
    
</div>
</body>
</html>
EOH;
print $hhhheadder;
}
?>