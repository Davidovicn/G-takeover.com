<?php
header("Content-type: text/vnd.wap.wml");
print "<?xml version=\"1.0\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\""
. " \"http://www.wapforum.org/DTD/wml_1.1.xml\">";
echo '<wml>';
?>
<?php
$xfile = @file("linkovi.txt");
$random_num = rand (0,count($xfile)-1);
$udata = explode("::",$xfile[$random_num]);
?>
<card id="Spiner" title="Spiner">
<p align="center">
Iz nashe velike baze sajtova izdvajamo:<br/>
<b> <?php  echo $udata[1]; ?>   </b><br/>
Jer ste vi to trazili :)<br/>
<br/><br/>---<br/>
<anchor>nazad<prev/></anchor><br/>
<small>Wapmasteri registrujte se za nashu uslugu <a href="http://wap.g-takeover.com/sr/reg/index.php">ovde</a></small><br/>
</p>
</card>
</wml>



