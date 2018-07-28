<?php
include('header.php') ;
?>
<card id="id1" title="Registracija">
<p align="center">
Dozvoljenji karakteri:<br/>
 a-z, 0-9, - _ .<br/>

<small>Nick:*</small><br/>
<input type="text" name="nick" maxlength="20"/><br/>
<small>Ime:</small><br/>
<input type="text" name="ime" maxlength="20"/><br/>
<small>Prezime:</small><br/>
<input type="text" name="prez" maxlength="20"/><br/>
<small>Mobilni(broj):</small><br/>
<input type="text" name="mob" maxlength="10"/><br/>
<small>Sajt:*</small><b>(bez http://)</b><br/>
<input type="text" name="sajt" maxlength="50"/><br/>
<small>e-mail:*</small><br/>
<input type="text" name="email" maxlength="30"/><br/>
<small><anchor>Registruj se!
<go href="reg.php" method="post">
<postfield name="nick" value="$(nick)"/>
<postfield name="ime" value="$(ime)"/>
<postfield name="prez" value="$(prez)"/>
<postfield name="mob" value="$(mob)"/>
<postfield name="sajt" value="$(sajt)"/>
<postfield name="email" value="$(email)"/>
</go></anchor></small><br/>
<?php
include('footer.php')     ;
?>

