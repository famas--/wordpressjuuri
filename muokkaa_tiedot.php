<?php

//sisällytetään yhteystidot
include 'yhteys2.php';



// tallennetaan postatut tiedot variableihin

$id = $_POST['var2'];


if(isset($_POST['submit'])){
$Update = "UPDATE koulutus SET
 koulutuksennimi= '$_POST[koulutuksennimi]',
 paikka= '$_POST[paikka]',
 aloitusaika= '$_POST[aloitusaika]',
 aloitusaikaklo= '$_POST[aloitusaikaklo]',
 lopetusaika= '$_POST[lopetusaika]',
 lopetusaikaklo= '$_POST[lopetusaikaklo]',
 ilmoittautuminen= '$_POST[ilmoittautuminen]',
 ilmoittautuminenklo= '$_POST[ilmoittautuminenklo]',
 ryhmankoko= '$_POST[ryhmankoko]',
 toteuttaja= '$_POST[toteuttaja]',
 email= '$_POST[email]',
 puh= '$_POST[puh]',
 kesto= '$_POST[kesto]',
 hinta= '$_POST[hinta]',
 kuvaus= '$_POST[kuvaus]'
WHERE koulutusid ='$_POST[var2]'";
mysqli_query($yhteys,$Update);
echo "<h1>Muutokset tallennettu</h1>";
};

$sql = mysqli_query ($yhteys,"SELECT * FROM koulutus WHERE koulutusid ='$id'");

	while($tieto = mysqli_fetch_array ($sql)){
		
		echo "<form action=muokkaa_tiedot.php method=post>";
		echo "<table border=0><tr>";
		
		echo "<td>Koulutus</td><td><textarea type=text rows=1 cols=50 name=koulutuksennimi style=\"resize: none\" >". $tieto['koulutuksennimi'] . "</textarea></td></tr>";
		echo "<td>Paikka</td><td><textarea type=text rows=1 cols=50 name=paikka style=\"resize: none\" >" . $tieto['paikka'] . "</textarea></td></tr>";
		
		echo "<td>Alkaa</td><td><input type=date size=10 name=aloitusaika value=" . $tieto['aloitusaika'] . ">";
		echo "&nbsp;&nbsp;&nbsp;klo:<input type=time size=5 name=aloitusaikaklo value=" . substr($tieto['aloitusaikaklo'], 0, 5) . "></td></tr>";
		
		echo "<td>Loppuu</td><td><input type=date size=10 name=lopetusaika value=" . $tieto['lopetusaika'] . ">"; 
		echo "&nbsp;&nbsp;&nbsp;klo:<input type=time size=5 name=lopetusaikaklo value=" . substr($tieto['lopetusaikaklo'], 0, 5) . "></td></tr>"; 
		
		echo "<td>Ilmoittautuminen paattyy</td><td><input type=date size=10 name=ilmoittautuminen value=" . $tieto['ilmoittautuminen'] . ">"; 
		echo "&nbsp;&nbsp;&nbsp;klo:<input type=time size=5 name=ilmoittautuminenklo value=" . substr($tieto['ilmoittautuminenklo'], 0, 5) . "></td></tr>"; 
		
	
		echo "<td>Ryhman koko</td><td><textarea type=text rows=1 cols=50 name=ryhmankoko style=\"resize: none\" >" . $tieto['ryhmankoko'] . "</textarea></td></tr>";
		echo "<td>Toteuttaja</td><td><textarea type=text rows=1 cols=50 name=toteuttaja style=\"resize: none\" >" . $tieto['toteuttaja'] . "</textarea></td></tr>";
		echo "<td>Yhteyshenkilon sahkopostiosoite</td><td><textarea type=text rows=1 cols=50 name=email style=\"resize: none\" >" . $tieto['email'] . "</textarea></td></tr>";
		echo "<td>Yhteyshenkilon puhelinnumero</td><td><textarea type=text rows=1 cols=50 name=puh style=\"resize: none\" >" . $tieto['puh'] . "</textarea></td></tr>";
		echo "<td>Koulutuksen kesto</td><td><textarea type=text rows=1 cols=50 name=kesto style=\"resize: none\" >" . $tieto['kesto'] . "</textarea></td></tr>";
		echo "<td>Hinta</td><td><textarea type=text rows=1 cols=50 name=hinta style=\"resize: none\" >" . $tieto['hinta'] . "</textarea></td></tr>";
		echo "<td>Kuvaus</td><td><textarea type=text rows=10 cols=50 name=kuvaus>". $tieto['kuvaus'] ."</textarea></td></tr>";
		echo "<input type=hidden name=var2 value=" . $tieto['koulutusid'] . ">";
		echo "<td><input type=submit name=submit value=Tallenna tietokantaan></td></tr>";
		echo "</table></form>"; 
		
		
	};



// suljetaan yhteys
mysqli_close($yhteys);
?>