<?php
include('config.php');
include('header.php');
@$nick=$_GET['nick'];
@$pass=$_GET['pass'];
include("config.php");
$nick= strtolower($nick);
$query = "SELECT * FROM `korisnici` WHERE `nick` = '".$nick."' AND `pass` LIKE '".$pass."' ";
$result = mysql_query($query);
$otvet = mysql_fetch_array($result);
if($otvet['nick'])
{
?>
<card id="id1" title="Hosting">
<p align="left">
<?php
echo '<a href="faq.php?nick=$nick&amp;pass=$pass">FAQ(chesto postavljana pitanja)</a><br/>';
echo '<a href="paketi.php?nick=$nick&amp;pass=$pass">Paketi</a><br/> ';
echo '<a href="poruchi.php?nick=$nick&amp;pass=$pass">Registracija paketa</a><br/> ';
?>
<?php
}else{
echo'<card id="id1" title="Hosting">
<p align="left">';
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