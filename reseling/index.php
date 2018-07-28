<?php
include('header.php');
include("config.php");
@$nick=$_GET['nick'];
@$pass=$_GET['pass'];
echo '<card id="id1" title="WapMeUp">
<p align="left">';
include("config.php");
$nick= strtolower($nick);
$query = "SELECT * FROM `korisnici` WHERE `nick` = '".$nick."' AND `pass` LIKE '".$pass."' ";
$result = mysql_query($query);
$otvet = mysql_fetch_array($result);
if($otvet['nick'])
{
echo 'Imate wap sajt, podrshku za php. <br/>Pa zashto onda nepokushate da zaradite neki dinar.<br/>
Skinite <br/><a href="WapMeUp2.0.zip">WapMeUp 2.0</a> <br/> jednostavno instalirajte. I prochitajte uputstvo. ';
}else{
echo 'Niste ulogovani!<br/>';
echo '
Nick:
<input type="text" name="nick"/>
<br/>
Pass:
<input type="password" name="pass"/>
<br/>
<a href="'.$_SERVER["PHP_SELF"].'?nick=$(nick)&amp;pass=$(pass)">[Uloguj se]</a>
<br/>
ili se
<a href="./registracija.php">registrujte.</a>
<br/>';

}
include ("footer.php");
?>