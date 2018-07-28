<?php


$site_name = "G-takeover";//your site name
$db_host = "localhost";  // DB Host
$db_user = "root";  // DB User
$db_pass = "";  // DB Pass
$db_name = "korisnici";  // DB Name
$dbc = mysql_connect($db_host, $db_user, $db_pass);
$dbs = mysql_select_db($db_name);

?>
