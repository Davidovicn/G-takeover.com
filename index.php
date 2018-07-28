<?php
include("header.php");
include("config.php");
@$nick=$_GET['nick'];
@$pass=$_GET['pass'];
echo '<card id="id1" title="Servisi">
           <p align="center">';
include("config.php");
$nick= strtolower($nick);
$query = "SELECT * FROM `korisnici` WHERE `nick` = '".$nick."' AND `pass` = '".$pass."' ";
$result = mysql_query($query);
$otvet = mysql_fetch_array($result);
if($otvet['nick']){
echo 'Pozz '.$otvet['nick'].'<br/>';
echo "<b><a href=\"c_panel.php?nick=$nick&amp;pass=$pass\">C-panel</a></b><br/>-----<br/><br/>";
echo '
<a href="spiner/index.php?nick='.$nick.'&amp;pass='.$pass.'">Spiner</a><br/>
<a href="host/index.php?nick='.$nick.'&amp;pass='.$pass.'">Hosting</a> <br/>
<a href="reseling/index.php?nick='.$nick.'&amp;pass='.$pass.'">Reseling</a><br/>
';
if ($otvet['reg_pass'] == "n"){



}
}else{
echo 'Niste ulogovani ili neispravni login podatci.<br/>';
echo '
nick:
<input type="text" name="nick"/>
<br/>
Pass:
<input type="password" name="pass"/>
<br/>
<a href="'.$_SERVER["PHP_SELF"].'?nick=$(nick)&amp;pass=$(pass)&amp;action=panel">[Uloguj se]</a>
<br/>
<a href="./registracija.php">Registrujte se!</a>
<br/>';

}
include ("footer.php");
?>
