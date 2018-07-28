<?php

$site_name = "G-takeover";//your site name
$admin_email = "";//your site email (admins)
$db_host = "localhost";  // DB Host
$db_user = "guzen_reg";  // DB User
$db_pass = "reg";  // DB Pass
$db_name = "guzen_nuke1";  // DB Name
$dbc = mysql_connect($db_host, $db_user, $db_pass);
$dbs = mysql_select_db($db_name);

//WEB BROWSER PROTECTION
 $user = explode ('/', $HTTP_USER_AGENT);
//HERE U CAN ADD BROWSER TYPES TO DENY ACCESS WITH
if($user[0]=="Opera"||$user[0]=="Mozilla"||$user[0]=="Go!Zilla"||$user[0]=="Netscape"||$user[0]=="MSIE"){
//HERE THE REDIRECTION URL

?>
