<?php
include("header.php");
@$admin_mail['admin_mail'];
@$tema=$_POST['tema'];
@$poruka=$_POST['poruka'];


$fh=fopen("mail.txt","r")             //Otvara txt fajl sa email adresama
        or die("Nemogu otvoriti fajl");
$to="$fh";  //kome se shalje
@mail($to, $tema, $poruka, "From: $admin_mail");
echo ' Grupni mail uspeshno poslat ';
print "(c) G-Team <br/>";
print "</p>";
print "</wml>";
?>