<?php
function headder()
{
 $ffootter= <<< EOH
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laptop Gallery</title>

<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
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
    
    	<a href="https://www.facebook.com/dialog/oauth?client_id=436565146478503&redirect_uri=https://www.laptopgallery.0fees.us/facebook.php&scope=email,user_birthday&response_type=code">
			<img src="images/fb.png" alt="twitter" width="58" height="54" />
		</a>
    	<a href="#">
			<img src="images/templatemo_twitter.png" alt="twitter" />
		</a>
		<a href="#">
			<img src="images/templatemo_rss.png" alt="rss" />
		</a>
        
    
   </div>
    
    <div class="cleaner"></div>
    
</div> <!-- end of header -->

<div id="templatemo_menu_wrapper">
	
    <div id="templatemo_menu">
        <ul>
            <li><a href="index.php"><span></span>Home</a></li>
            <li><a href="about.php"><span></span>About</a></li>
            <li><a href="feedback.php"><span></span>Feedback</a></li>
            <li><a href="signup.php"><span></span>Register</a></li>
            <li><a href="login.php"><span></span>Login</a></li>
            <li><a href="contact.php"><span></span>Contact</a></li>
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
