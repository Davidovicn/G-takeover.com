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
<card id="id1" title="F.A.Q">
<p align="left">
<b>Dali moram da upishem ispravne podatke u formularu za naruchivanje?</b><br/>
Naravno , u sluchaju unoshenja neispravnih podataka protiv vas se moze pokrenuti odredjeni zakonsi postupak, predvidjen za ovakve situacije. Ako mislite da vas nikako nemogu pronaci onda se varate. Evo shta trenutno imam o vama: <br/>
mobilni: $mob <br/>
Vasha ip adresa: $kor_ip<br/>
Vash port: $kor_port<br/>
Na osnovnu ovih podataka mogu vas pronaci kroz nekoliko sati. <br/>
<b>Dali smem da naruchim vishe od jednog paketa ili domena?</b><br/>
Naravno!<br/>
<b>Nemam e-mail adresu. A hteo bih da naruchim vash paket. Dali je to moguce?</b><br/>
Ne bez e-mail adrese. Posetite <a href='http://wap.gala.net'>gala.net</a> tu mozete besplatno otvoriti e-mail nalog. E-mail je neophodan zbog toga shto sve vaznije informacije dostavljamo putem njega.<br/>
<b> Dali ovo znachi da mogu ceo sajt odrzavati putem mobilnog telefona?</b><br/>
NE! Ili bar ne josh uvek. U izradi je skripta za navigaciju i manipulisanje datotekama preko svih telefona koji podrzavaju wap protokol. Za sada mozete koristiti samo par programchica koji ce kroz nekoliko dana biti dostupni u servisima.<br/>

<?php
}else{
echo'<card id="id1" title="F.A.Q">
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
