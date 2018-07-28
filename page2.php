<?php


include("config.php");
@$name=$_GET['name'];
@$pass=$_GET['pass'];
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
print'<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN"
"http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>
<card title="Page2"><p>';
include("config.php");
$name= strtolower($name);
$query = "SELECT * FROM `gum_regs` WHERE `name` = '".$name."' AND `pass` LIKE '".$pass."' ";
$result = mysql_query($query);
$otvet = mysql_fetch_array($result);
if($otvet['name']){
echo 'Logged in as '.$otvet['name'].'<br/>';
/*
Add after echo' your wml code like links etc .
eg.
<a href="./page2.php?name='.$name.'&amp;pass='.$pass.'">Page3</a>
If you use this page template to conect to other page leave the ?name='.$name.'&amp;pass='.$pass.' variables
*/
echo '

<a href="./page3.php?name='.$name.'&amp;pass='.$pass.'">Page3</a>

';
}else{
echo 'You are not logged in!';
echo '
<br/><anchor>Back<prev/></anchor>
<br/>
';
}
print"</p>
</card>
</wml>";
?>
