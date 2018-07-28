<?php

include("config.php");
@$nick=$_GET['nick'];
@$pass=$_GET['pass'];
@$np=$_GET['np'];
include("header.php");
include("config.php");
echo ' <card id="id1" title="C-panel">
           <p align="left"> ';

$nick= strtolower($nick);
$query = "SELECT * FROM `korisnici` WHERE `nick` = '".$nick."' AND `pass` LIKE '".$pass."' ";
$result = mysql_query($query);
$otvet = mysql_fetch_array($result);
if($otvet['nick']){
if ($np){

	$query=mysql_query("UPDATE `korisnici` SET `pass` = '$np' WHERE `nick` = '$nick' LIMIT 1");
	$query=mysql_query("UPDATE `korisnici` SET `reg_pass` = 'y' WHERE `nick` = '$nick' LIMIT 1");
	echo "<b>Lozinka promenjena!</b><br/>
	<a href=\"index.php?nick=$nick&amp;pass=$np\">Nazad u meni</a>";

}
else{

echo "
<b>C-Panel</b><br/>---<br/>
Stara: <b/>$pass<br/>
Promeni lozinku:<br/>
<input type=\"password\" name=\"newpass\"/><br/>
<a href=\"c_panel.php?nick=$nick&amp;pass=$pass&amp;np=$(newpass)\">promeni</a>";

}
}else{

echo '<b>Nisi ulogovan ili neispravni login podatci!</b><br/>';
echo '
Nick:
<input type="text" name="nick"/>
<br/>
Pass:
<input type="password" name="pass"/>
<br/>
<a href="'.$_SERVER["PHP_SELF"].'?nick=$(nick)&amp;pass=$(pass)&amp;action=panel">[Uloguj se]</a>
<br/>
<a href="./registracija.php">Registruj se.</a>
<br/>';

}
include ("footer.php");

?>
