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
<card id="id1" title="Paketi">
<p align="left">
Hosting paketi koji su trenutno u ponudi<br/>
<br/>
<?php
echo '<a href="poklon.php?nick=$nick&amp;pass=$pass">Poklon paket</a><br/> ';
echo '<a href="osnovni.php?nick=$nick&amp;pass=$pass">Osnovni paket</a><br/> ';
echo '<a href="napredni.php?nick=$nick&amp;pass=$pass">Napredni paket</a><br/> ';
echo '<a href="extremni.php?nick=$nick&amp;pass=$pass">Extremni paket</a><br/>';
echo '<a href="bronze.php?nick=$nick&amp;pass=$pass">Bronze paket</a><br/>';
echo '<a href="silver.php?nick=$nick&amp;pass=$pass">Silver paket</a><br/>';
echo '<a href="gold.php?nick=$nick&amp;pass=$pass">Gold paket</a><br/>';
echo '<a href="premium.php?nick=$nick&amp;pass=$pass">Premium paket</a><br/>';
?>
<?php
}else{
echo'<card id="id1" title="Paketi">
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
