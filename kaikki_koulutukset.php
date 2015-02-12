<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<link rel="stylesheet" type="text/css" href="wp-content/themes/twentyfourteen-child4/style.css">
</head>
<body>


<?php
//sisällytetään yhteystidot
include 'yhteys.php';



echo "<table width=\"820px\">
<tr>
<td><h1>ICT- hanke ohjauspaneeli</h1></td><td><form id=\"form0\" action=\"koulutus3.php\" method=\"POST\">
	<td  align=\"right\"><input type=\"submit\" value=\"LIS&Auml&Auml UUSI KOULUTUS\">
	</form><form id=\"form0\" action=\"palautteet_yhteenveto4.php\" method=\"POST\">
	<td  align=\"right\"><input type=\"submit\" value=\"KAIKKI PALAUTTEET\">
	</form></td>
</table>";









$sql = mysql_query("SELECT * FROM koulutus");
while($tulos = mysql_fetch_array($sql))
{
	
	
	echo 
	
	"<table width=\"820px\">
	
	
	<tr><td>" . $tulos['koulutuksennimi'] . "</td>
	
	<form id=\"form1\" action=\"muokkaa_tiedot.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var2\" value=" . $tulos['koulutusid']. ">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	<td style=\"width:85px\" align=\"right\"><input type=\"submit\" value=\"Muokkaa\"></td>
		
	</form>
	
	
	<form id=\"form2\" action=\"ilmoittautuminen2.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var2\" value=" . $tulos['koulutusid']. ">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	<input type=\"hidden\" name=\"aloitusaika\" value=" . $tulos['aloitusaika']. ">
	<input type=\"hidden\" name=\"aloitusaikaklo\" value=" . $tulos['aloitusaikaklo']. ">
	<input type=\"hidden\" name=\"lopetusaika\" value=" . $tulos['lopetusaika']. ">
	<input type=\"hidden\" name=\"lopetusaikaklo\" value=" . $tulos['lopetusaikaklo']. ">
	<td style=\"width:85px\" align=\"right\"><input type=\"submit\" value=\"Ilmoittaudu\"></td>
	
	</form>
	
	<form id=\"form3\" action=\"ilmoittautuneet.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var2\" value=" . $tulos['koulutusid']. ">
	
	<td style=\"width:85px\" align=\"right\"><input type=\"submit\" value=\"Ilmoittautuneet\"></td>
	
	</form>
	
	<form id=\"form3\" action=\"osallistujalista.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var2\" value=" . $tulos['koulutusid']. ">
	
	<td style=\"width:85px\" align=\"right\"><input type=\"submit\" value=\"Osallistujalista\"></td>
	
	</form>
	
	<form id=\"form3\" action=\"koulutuksenpalautteet.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var2\" value=" . $tulos['koulutusid']. ">
	<td style=\"width:100px\" align=\"right\"><input type=\"submit\" value=\"Palautteet\">=></td>
	
	</form>
	
	
	<form id=\"form4\" action=\"palaute_vaihto.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var2\" value=" . $tulos['koulutusid']. ">
	
	<td style=\"width:85px\" align=\"right\"><input type=\"submit\" name=\"var3\" value="
	
	. $tulos['palaute'].
	
	"></td></tr>
	
	</form>
	
	</table>";
	
}




?>  

</body>
</html>