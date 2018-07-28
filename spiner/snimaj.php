<?php

include('header.php');
include("config.php");
@$nick=$_GET['nick'];
@$pass=$_GET['pass'];
include("config.php");
$nick= strtolower($nick);
$query = "SELECT * FROM `korisnici` WHERE `nick` = '".$nick."' AND `pass` LIKE '".$pass."' ";
$result = mysql_query($query);
$otvet = mysql_fetch_array($result);
if($otvet['nick'])
{
@$link=$_POST['link'];
@$tekst=$_POST['tekst'];

if($link=="")
{
    echo ' <card id="id1" title="Greshka">
            <p align="left"> ';
    echo 'Niste uneli adresu vasheg sajta<br/>';
}
elseif($tekst=="")
{
    echo  '<card id="id1" title="Greshka">
           <p align="left">   ';	echo ' Niste uneli naziv vasheg sajta <b>';
}
else
{
@mail("portalscg@gmail.com ", "SPINER" , " Dodat je nov sajt na spiner
Adresa: $link
Nick: $nick
", "From: spiner@g-takeover.com");
$fp=@fopen("linkovi.txt","a");
    @fputs($fp,"::<br/><a href='http://$link'>$tekst</a><br/> \r\n");

    @fclose($fp);
    echo '<card id="id1" title="Snimam....">
             <p align="left"> ';
    echo ' <br/>Unos je dodat u bazu. I verovatno je vec na nekom sajtu :)<br/>';
    echo ' <b>Primer:</b><br/> ';
}   include("razmena.php");

}else{
echo '<card id="id1" title="Uloguj se....">
             <p align="left"> ';
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
