<?php
function headder()
{
 $ffootter= <<< EOH
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laptop Gallery</title>

<link href="css/userCSS.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>

<div id="templatemo_header">
            
    <div id="site_title">
        
        <a href="#" target="_parent"> We Provide latest laptops for you</a>
        
    </div> <!-- end of site_title -->
    
   <div id="header_right">
    
    	<a href="#"><img src="images/templatemo_twitter.png" alt="twitter" /></a><a href="#"><img src="images/templatemo_rss.png" alt="rss" /></a>
        
    
   </div>
    
    <div class="cleaner"></div>
    
</div> <!-- end of header -->

<div id="templatemo_menu_wrapper">
	
    <div id="templatemo_menu">
        <ul>
            <li><a href="home.php"><span></span>Home</a></li>
            <li><a href="editdetails.php"><span></span>Edit Details</a></li>
            <li><a href="comment.php"><span></span>Comments</a></li>
             <li><a href="passwordchange.php"><span></span>Change Password</a></li>
            <li><a href="logout.php"><span></span>Logout</a></li>
            
        </ul>    	
	</div>
</div> <!-- end of templatemo_menu -->


<div id="templatemo_main"> <span class="tm_bottom"></span>
	
<div id="templatemo_content">
    
    	<div class="content_box">
            
EOH;
print $ffootter;
}
?>