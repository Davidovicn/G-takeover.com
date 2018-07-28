<?php
include('config.php');
include('header.php');
$int='50';
@$nick=$_GET['nick'];
@$pass=$_GET['pass'];
include("config.php");
$nick= strtolower($nick);
$query = "SELECT * FROM `korisnici` WHERE `nick` = '".$nick."' AND `pass` LIKE '".$pass."' ";
$result = mysql_query($query);
$otvet = mysql_fetch_array($result);
if($otvet['nick'])
{?>
<card id="id1" title="Naruchi">
<p align="center">
<b>Izaberite koji host paket zelite</b><br/>
<select name='host'>
<option value=' <?php echo $poklon * $evro + $int  ;?>'> Poklon (<?php echo $poklon * $evro + $int ;?>din.)</option>
<option value=' <?php echo $osnovni * $evro + $int ;?>'> Osnovni(<?php echo $osnovni * $evro + $int ;?>din.)</option>
<option value=' <?php echo $napredni * $evro + $int ;?>'> Napredni(<?php echo $napredni * $evro + $int ;?>din.)</option>
<option value=' <?php echo $extremni * $evro + $int ; ?>'> Extremni(<?php echo $extremni * $evro + $int  ;?>din.)</option>
<option value=' <?php echo $bronze * $evro + $int ; ?>'> Bronze(<?php echo $bronze * $evro + $int  ;?>din.)</option>
<option value=' <?php echo $silver * $evro + $int ; ?>'> Silver(<?php echo $silver * $evro + $int  ;?>din.)</option>
<option value=' <?php echo $gold * $evro + $int ; ?>'> Gold(<?php echo $gold * $evro + $int  ;?>din.)</option>
<option value=' <?php echo $premium * $evro + $int ; ?>'> Premium(<?php echo $premium * $evro + $int  ;?>din.)</option>
</select><br/>
<b>Izaberite domen koji zelite da registrujete</b><br/>
<select name='domen'>
<option value=' <?php echo $com ;?>'>.com(<?php echo $com  ;?> evra)</option>
<option value=' <?php echo $net ; ?>'>.net(<?php echo $net ;?> evra)</option>
<option value=' <?php echo $org ;?>'>.org(<?php echo $org ;?> evra)</option>
<option value=' <?php echo $biz ;?>'>.biz(<?php echo $biz ;?> evra) </option>
<option value=' <?php echo $eu ;?>'>.eu(<?php echo $eu ;?> evra)</option>
<option value=' <?php echo $cc ;?>'>.cc(<?php echo $cc ;?> evra) </option>
<option value=' <?php echo $info ;?>'>.info(<?php echo $info ;?> evra)</option>
<option value=' <?php echo $tv ;?>'>.tv(<?php echo $tv ; ?> evra)</option>
</select><br/>
Ispishite minimum tri moguca imena za vash sajt po prioritetu<br/>
<b>ime sajta(prioritet1)</b>
<input name='pri1' title='pri1' type='text' /><br/>
<b>Prioritet 2</b>
<input name='pri2' title='pri2' type='text' value=''/><br/>
<b>Prioritet 3</b>
<input name='pri3' title='pri3' type='text' value=''/><br/>
<b>Vashe ime:</b>
<input name='ime' title='ime' type='text' value=''/><br/>
<b>Prezime: </b>
<input name='prezime' title='prezime' type='text' value=''/><br/>
<b>Adresa 1</b>
<input name='adresa1' title='adresa1' type='text' value=''/><br/>
<b>Adresa 2</b>
<input name='adresa2' title='adresa2' type='text' value=''/><br/>

<b>Grad</b>
<input name='grad' title='grad' type='text' value=''/><br/>
<b>Poshtanski broj</b>
<input name='zip' title='zip' type='text' value=''/><br/>
<b>e-mail:</b>
<input name='mail' title='mail' type='text' value=''/><br/>
<b>mob:</b>
<input name='mob' title='mob' type='text' value='@'/><br/>
<b>fix:</b>
<input name='fix' title='fix' type='text' value=''/><br/>
<anchor title="Ok">Poruchi <br/>
<?php
echo '<go href="naruchi.php?nick=$nick&amp;pass=$pass" method="post">';
?>
<postfield name="host" value="$(host)"/>
<postfield name="domen" value="$(domen)"/>
<postfield name="pri1" value="$(pri1)"/>
<postfield name="pri2" value="$(pri2)"/>
<postfield name="pri3" value="$(pri3)"/>
<postfield name="ime" value="$(ime)"/>
<postfield name="prezime" value="$(prezime)"/>
<postfield name="adresa1" value="$(adresa1)"/>
<postfield name="adresa2" value="$(adresa2)"/>
<postfield name="grad" value="$(grad)"/>
<postfield name="zip" value="$(zip)"/>
<postfield name="mail" value="$(mail)"/>
<postfield name="mob" value="$(mob)"/>
<postfield name="fix" value="$(fix)"/>
</go>
</anchor><br/><br/>
<?php
}else{
echo'<card id="id1" title="Poruchi">
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
