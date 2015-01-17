<?php
class Database {
    // must perform changes in  manuall changes in footer.php
    function openConnect() {
    $link = mysql_connect('sql211.0fees.us','0fe_15490448','991472034525') or die("could not open connection:".mysql_error());
    //$link = mysql_connect('sql211.0fees.us','0fe_15490448','991472034525') or die("could not open connection:".mysql_error());
        return $link;
    }
    
    function openDb() {
        $lapDb = mysql_select_db('0fe_15490448_laptop_gallery') or die("could not open database:".mysql_error());
        return $lapDb;
    }
    
    function imageUrl() {
        $url = 'http://laptopgallery.0fees.us/';
        return $url;
    }
    
    
}
?>