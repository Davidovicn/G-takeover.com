<?php
#############################
#### Cena domena ############
#############################
$biz='12';
$cc='27';
$eu='19';
$info='6';
$net='9';
$org='11';
$tv='31';
$com='10';
########################
## Cena hostova ########
########################

$poklon='7';    //cene su u dinarskoj vrednosti sa zarachunatim pdv-om od 18%
$osnovni='10';
$napredni='17';
$extremni='40';
##########################################################
#### reseling sa www.uniwebhosting.com/sr/order.html  ####
##########################################################
$bronze='22';         //smanjio sam cenu za 2 evra
$silver='46';         // isto 2 evra
$gold='79';           // za 6 evra
$premium='116';       // za 6 evra
##########################
#### Osnovni setup #######
##########################
$admin_mail='portalscg@gmail.com'; //Ovde upishite e-mail adresu za from: polje emaila koji se shalje korisniku
$evro='80'; //trenutni kurs evra
$interes='50'; //Zarachunaj svoju zaradu :)
##########################
#### Tekstovi ############
##########################
// ovaj mail se automatski shalje korisniku koji registruje svoj sajt.
$tema='Porudzbenica';
$sajt_tema="Neko je naruchio";
$sajt_mail="server@g-takeover.com";



////////////////////////////////////////////////////////////
//// Za pisanje svog teksta morash znati da ako zelish  ////
//// da napravish novi red koji se obichno postize pri- ////
//// tiskom na taster enter koristicesh komandu \n      ////
////////////////////////////////////////////////////////////
//// U ovoj verziji automatskog maila josh uvek nije do ////
//// stupna funkcija za manipulaciju fontom zbog lep-   ////
//// sheg izgleda. Za to mi treba html ali nisam imao   ////
//// vremena da to odradim. Ali u drugoj verziji BICE   ////
////////////////////////////////////////////////////////////
//sql konekcija
$site_name = "G-takeover";//your site name
$db_host = "localhost";  // DB Host
$db_user = "root";  // DB User
$db_pass = "";  // DB Pass
$db_name = "baza";  // DB Name
$dbc = mysql_connect($db_host, $db_user, $db_pass);
$dbs = mysql_select_db($db_name);
?>