<?php
include("header.php");
include("config.php");
@$nick=$_GET['nick'];
@$pass=$_GET['pass'];
echo '<card id="id1" title="Spiner">
<p align="left">';
include("config.php");
$nick= strtolower($nick);
$query = "SELECT * FROM `korisnici` WHERE `nick` = '".$nick."' AND `pass` LIKE '".$pass."' ";
$result = mysql_query($query);
$otvet = mysql_fetch_array($result);
if($otvet['nick'])
{

echo '<b>Napomena:</b><i> Vash sajt dodajte samo jednom inache ce vam trajno biti zabanjena regisrtracija za ovaj servis.</i><br/>
<b>Adresa sajta <u>(bez http://)</u></b> <br/>
<input name="link" title="link" type="text" maxlength="50" /> <br/>
<b>Naziv sajta </b>  <br/>
<input name="tekst" title="tekst" type="text" value="" maxlength="20"/><br/>
                                                                                                                                              <anchor title="Ok">Poruchi <br/>
<go href="snimaj.php?nick=$nick&amp;pass=$pass" method="post">

<postfield name="link" value="$(link)"/>
<postfield name="tekst" value="$(tekst)"/>
</go>
</anchor><br/><br/> ';
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
