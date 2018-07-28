<?php
include('header.php');
include("config.php");
@$nick=$_GET['nick'];
@$pass=$_GET['pass'];
echo '<card id="id1" title="FAQ">
<p align="left">';
include("config.php");
$nick= strtolower($nick);
$query = "SELECT * FROM `korisnici` WHERE `nick` = '".$nick."' AND `pass` LIKE '".$pass."' ";
$result = mysql_query($query);
$otvet = mysql_fetch_array($result);
if($otvet['nick'])
{
echo '

<b>Shta je ustvari spriner?</b><br/>
Samo jedna ideja koja ce sprechiti sajtove kao shto su mradar da zaradjuju preko nas malih wapmastera: <br/>
<b>Kako radi spiner ?</b><br/>
Pa ovako chim se registrujete vash sajt se snima u bazu, a zatim ako ga sluchajno zakachi skripta vec istog trenutka emituje na nekom od prijavljenih sajtova.<br/>
<b>Pa koliko posetilaca meni stizu odavde?</b><br/>
Pa, odavde teshko da ce ti stici vishe od nekoliko poseta dnevno. Ali zato sa svih ostalih sajtova koji su prijavljeni na servis posete ce ti sigurno stizati u vecem broju.<br/>
<b>Koje su moje obaveze?</b><br/>
Na svoj sajt morash staviti ovaj link http://wap.g-takeover.com/sr/reg/spiner/razmena.php i kao ime stavi Spiner. Ako zelish videti primer kako radi klikni na <a href="http://wap.g-takeover.com/sr/reg/spiner/razmena.php">Spiner</a><br/>
<b>Pa kakvu ti korist imash od ovoga?</b><br/>
Boze, kakvo glupo pitanje. Pa imam koristi apsolutno isto koliko i vi. Ovako ce se drugi reklamirati preko mene a i ja preko njih.<br/>
<b>Dali sam obavezan da postavim onaj link na svoju pochetnu stranu?</b><br/>
Da. Ako zelish da se reklamirash moracesh to da uradish. Jer svaki put kada se tvoj link pojavi na nechijem sajtu skripta ce trejsovati tvoj sajt da proveri dali se neki link prikazuje na njemu.
U sluchaju da je link neaktivan na tvom sajtu vishe od 168 sati(nedelju dana) bicesh automatski uklonjen iz baze i stavljen na listu nepozeljnih. Odatle te ni ja nemogu izvuci jer je enkriptovano md5 enkripcijom. Mislim da je poshteno. <br/>
<b>Moj sajt je poseceniji od nekih sajtova ovde, zar to ima smisla?</b><br/>
E shta da ti radim. Pa ima mnogo posecenijih sajtova nego shto je tvoj. Mozesh biti srecan shto imash bilo kakve shanse da se emitujesh na nekima od njih.<br/>
<b>Dali je istina da si toliko dobar u krevetu?</b><br/>
Mislim da ovo nema nikakve veze sa ovim, ali hajde da ti odgovorim kada te vec nije sramota da pitash. <b><u>NARAVNO!!!</u></b>
';
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
