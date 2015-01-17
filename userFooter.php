<?php
function footter()
{
 $hheadder= <<< EOH
		</div>
<div class="post_box pb_last">
            <div class="cleaner"></div>
        </div>
    
    </div>
    

    
    <div class="cleaner"></div>
</div> <!-- end of main -->


<div id="templatemo_footer">

	<ul class="footer_menu">
        <li class="first"><a href="home.php">Home</a></li>
        <li><a href="#">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
	</ul>
    
	Copyright &copy; 2012 <a href="index.php">Laptop Gallery</a>
    
</div>
</body>
</html>
EOH;
print $hheadder;
}
?>