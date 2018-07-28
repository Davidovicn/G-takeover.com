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
{##########################################
##### Kalkulacija cene ###################
##########################################

$cena_hosta=$extremni + $interes    ;
$mesechno=$cena_hosta / 12     ;
$u_evru=$cena_hosta / $evro ;
##############################################
#####Odavde pochinje standardna wml strana ###
##############################################
?>
<card id="id1" title="Extremni">
<p align="left">
<b>Extremni</b><br/>
Eh shta se sve moze uraditi sa ovim paketom. Zamislite sajt sa milion korisnika. I sa ogromnom bazom podataka. Stvarno neverovatno.      <br/>
<b>Karakteristike:</b><br/>
<u>Platforma Servera:</u> Linux/unix<br/>
<u>webspace:</u> 500 mb <br/>
<u>Mesechni saobracaj (trafic):</u>Neogranicheno<br/>
<u>Poddomeni:</u>Neogranicheno<br/>
<u>Kontrol panel:</u> CONFIXX Pro<br/>
<b>e-mail</b><br/>
<u>POP3-Mail/IMAP:</u>Neogranicheno<br/>
<u>Spam i Virus Zashtita:</u>da<br/>
<u>mail server(mail.vashdomen.com):</u>da<br/>
<u>Webmail:</u>da<br/>
<u>Catch-All-Mails:</u>da<br/>
<u>Mailing-liste:</u>20<br/>
<b>Pristup serveru</b><br/>
<u>FTP nalozi:</u>Neogranicheno<br/>
<u>Web-FTP:</u>da<br/>
<b>Aplikacije, baze, prtokoli</b><br/>
<u>PHP:</u>da<br/>
<u>SSL:</u>da<br/>
<u>CGI:</u>da<br/>
<u>mySQL baze:</u>50<br/>
<u>phpMyAdmin:</u>da<br/>
<u>Cronjobs:</u>50<br/>
<u>@-domains:</u>50<br/>
<u>DNS-Wildcards:</u>da<br/>
<u>Zashtita direktorijuma lozinkom:</u>da<br/>
<u>Editovanje error stranica(404 etc.):</u>da<br/>
<u>frontpage:</u>da<br/>
<u>Samostalni BackUp:</u>da<br/>
<b>Tehnichka podrshka</b><br/>
Telefonom (u radno vreme)<br/>
E-mailom (u radno vreme)<br/>
TicketSystem (24/h)<br/>
Automatski BackUp (24h)<br/>
Mesechno: <b><?php echo $mesechno ; ?> din.</b><br/>
Ukupno:<b><?php echo  $cena_hosta ; ?>  din.</b><br/>
Ukupno u evru: <b><?php echo $u_evru ?> Evra</b><br/>
<?php
echo '<a href="poruchi.php?nick=$nick&amp;pass=$pass">Naruchi ovaj paket</a>';
?><br/>
<small>Uz svaki kupljeni host paket obavezna ukpovina nekog od ponudjenih domena.</small><br/>
<?php
}else{
echo'<card id="id1" title="Extremni">
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