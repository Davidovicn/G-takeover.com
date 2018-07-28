<?php
include("header.php");
include("config.php");
echo ' <card id="id1" title="Registracija">
<p align="center">';

@$nick=$_POST['nick'];
@$email=$_POST['email'];
@$prez=$_POST['prez'];
@$mob=$_POST['mob'];
@$sajt=$_POST['sajt'];
@$nick=$_POST['nick'];

if($nick!="" and $email!="" )
{


$cik_simb_vaig = 5; // from how many simbols will made password
$drikst = 'zxcvbnmasdfghjklqwertyuiopZXCVBNMASDFGHJKLQWERTYUIOP1234567890'; //all simbols


$cik_simb = strlen($drikst); // count the $drikst array :)

#rondom password engine
$pass="";
for($int=0;$int<$cik_simb_vaig;$int++){
    $rand = rand(0, $cik_simb);
    $char = substr($drikst, $rand, 1);
    $pass = "$pass"."$char";
}

$nick= strtolower($nick);
$query= ("INSERT INTO `korisnici`
        ( `id`,
        `nick` ,
        `pass`,
        `ime`,
        `prez`,
        `mob` ,
        `sajt` ,
        `mail` ,
        `rtime`,
        `ip`,
        `soft`,
		`reg_pass` )
        values('','$nick','$pass','ime','$prez','$mob','$sajt','$email','".time()."','$_SERVER[REMOTE_ADDR]','$_SERVER[HTTP_USER_AGENT]','n');");
$result = mysql_query($query);
if(!$result) echo 'Greshka '.mysql_error();
if(!$result){print"Ovo korisnichko ime vec postoji, pouhajte ponovo<br/><anchor>nazad<prev/></anchor>";
}else
{
mail("$email", "Registracija uspeshna", "Vasha lozinka na G-Project servisima je $pass a nick $nick.. S poshtovanjem G-team !", "From: $admin_email");
print"Registracija uspeshna! <br/>Vasha lozinka : <b> $pass </b><br/>Nick: $nick <br/>  Takodje vam je prosledjena na e-mail!<br/><a href=\"./index.php\">servisi</a>";
}
}else{
print"Molim popunite sva polja!<br/><anchor>Nazad<prev/></anchor>";
}
print"</p>
</card>
</wml>";
