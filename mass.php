<?php
include("header.php");
include("config.php");
@$nick=$_GET['nick'];
@$pass=$_GET['pass'];
echo '<card id="id1" title="Tema">
<p align="left">';
include("config.php");
$nick= strtolower($nick);
$query = "SELECT * FROM `korisnici` WHERE `nick` = '".$nick."' AND `pass` LIKE '".$pass."' ";
$result = mysql_query($query);
$otvet = mysql_fetch_array($result);
if($otvet['nick'])
{

echo '<b>Napomena:</b><i> Ako ste jedan od srecnika koji imaju pristupa ovom programu znachi da vam verujem. Molim vas nemojte to iskoristiti.</i><br/>
<b>Vash mail</b> <br/>
<input name="admin_mail" title="admin_mail" type="text"  /> <br/>
<b>Tema: </b>  <br/>
<input name="tema" title="tema" type="text" value="" /><br/>
<b>Tekst masovne poruke: </b>  <br/>
<input name="poruka" title="poruka" type="text" value="" /><br/>

<anchor title="Ok">Poruchi <br/>
<go href="slanje.php?nick=$nick&amp;pass=$pass" method="post">

<postfield name="admin_mail" value="$(admin_mail)"/>
<postfield name="tema" value="$(tema)"/>
<postfield name="poruka" value="$(poruka)"/>
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
