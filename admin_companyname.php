<?php
include_once('adminHeader.php');
include_once('userFooter.php');
include_once('database.php');
$db = new Database();
headder();

                    $link = $db->openConnect();
                    $db->openDb();
                    $query = "select distinct(CompanyName) from products";
                    $rest= mysql_query($query,$link);

                     while($ar = mysql_fetch_array($rest))
                 {
                    print "<a href='admin_product.php?company=".$ar['CompanyName']."'>".$ar['CompanyName']."</a><br/>";
                 }
                                     
                    mysql_close($link);


footter();
?>