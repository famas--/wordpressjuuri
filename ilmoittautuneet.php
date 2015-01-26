
<?php
//sisällytetään yhteystidot
include 'yhteys2.php';


// tallennetaan postatut tiedot variableihin

$nimi = $_POST['var2'];

$lasku1 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = $nimi"); 
$lasku1a = mysqli_fetch_assoc($lasku1);

$lasku2 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND sukupuoli = 'mies'"); 
$lasku2a = mysqli_fetch_assoc($lasku2);

$lasku3 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND sukupuoli = 'nainen'"); 
$lasku2b = mysqli_fetch_assoc($lasku3);

$lasku4 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND henkilomaara = 'alle 5'"); 
$lasku3a = mysqli_fetch_assoc($lasku4);

$lasku5 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND henkilomaara = '10-19'"); 
$lasku3b = mysqli_fetch_assoc($lasku5);

$lasku6 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND henkilomaara = '20-49'"); 
$lasku3c = mysqli_fetch_assoc($lasku6);

$lasku7 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND henkilomaara = '50-99'"); 
$lasku3d = mysqli_fetch_assoc($lasku7);

$lasku8 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND henkilomaara = '100-249'"); 
$lasku3e = mysqli_fetch_assoc($lasku8);

$lasku9 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND henkilomaara = '500 tai yli'"); 
$lasku3f = mysqli_fetch_assoc($lasku9);

$lasku10 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND ika = 'alle 25 vuotias'"); 
$lasku4a = mysqli_fetch_assoc($lasku10);

$lasku11 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND ika = '25-29-vuotias'"); 
$lasku4b = mysqli_fetch_assoc($lasku11);

$lasku12 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND ika = '30-54-vuotias'"); 
$lasku4c = mysqli_fetch_assoc($lasku12);

$lasku13 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND ika = 'yli 54-vuotias'"); 
$lasku4d = mysqli_fetch_assoc($lasku13);

$lasku14 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND ammatti = 'toissa'"); 
$lasku5a = mysqli_fetch_assoc($lasku14);

$lasku15 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND ammatti = 'koulussa'"); 
$lasku5b = mysqli_fetch_assoc($lasku15);

$lasku16 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND ammatti = 'tyoton'"); 
$lasku5c = mysqli_fetch_assoc($lasku16);

$lasku17 = mysqli_query($yhteys,"SELECT COUNT(*) as lasku FROM ilmoittautuneet WHERE koulutusid = '$nimi' AND ammatti = 'tyomarkkinoiden ulkopuolella'"); 
$lasku5d = mysqli_fetch_assoc($lasku17);



$id = mysqli_query ($yhteys,"SELECT koulutuksennimi FROM koulutus WHERE koulutusid = $nimi");
while($koulutus = mysqli_fetch_array ($id)){



echo "<table>
		<td><h1>" . $koulutus['koulutuksennimi'] . "</h1></td><tr></table>
		<table>
		<td>Ilmoittautuneita</td><td>".$lasku1a['lasku']. "</td><tr>
		<td>Miehia</td><td>".$lasku2a['lasku']. "</td><tr>
		<td>Naisia</td><td>".$lasku2b['lasku']. "</td><tr>
		<td><b>Yritysten kokoluokat</b></td><tr>
		<td>alle 5</td><td>".$lasku3a['lasku']. "</td><tr>
		<td>10-19</td><td>".$lasku3b['lasku']. "</td><tr>
		<td>20-49</td><td>".$lasku3c['lasku']. "</td><tr>
		<td>50-99</td><td>".$lasku3d['lasku']. "</td><tr>
		<td>100-249</td><td>".$lasku3e['lasku']. "</td><tr>
		<td>500 tai yli</td><td>".$lasku3f['lasku']. "</td><tr>
		<td><b>Ika luokat</b></td><tr>
		<td>alle 25 vuotias</td><td>".$lasku4a['lasku']. "</td><tr>
		<td>25-29-vuotias</td><td>".$lasku4b['lasku']. "</td><tr>
		<td>30-54-vuotias</td><td>".$lasku4c['lasku']. "</td><tr>
		<td>yli 54-vuotias</td><td>".$lasku4d['lasku']. "</td><tr>
		<td><b>Ammatit</></td><tr>
		<td>toissa</td><td>".$lasku5a['lasku']. "</td><tr>
		<td>koulussa</td><td>".$lasku5b['lasku']. "</td><tr>
		<td>tyoton</td><td>".$lasku5c['lasku']. "</td><tr>
		<td>tyomarkkinoiden ulkopuolella</td><td>".$lasku5d['lasku']. "</td><tr>
		</table><br>";}

echo "<table border=\"1px\"><td>Yritys</td><td>Nimi</td><td>Sukupuoli</td><td>Yrityksen koko</td><td>Ika</td><td>Ammatti</td><tr>";


$sql = mysqli_query ($yhteys,"SELECT * FROM ilmoittautuneet WHERE koulutusid = $nimi");
	
	while($tieto = mysqli_fetch_array ($sql)){
		
		echo "
		
	


		<td>" . $tieto['yritys'] . "</td>
		<td>" . $tieto['nimi'] . "</td>
		<td>" . $tieto['sukupuoli'] . "</td>
		<td>" . $tieto['henkilomaara'] . " hloa</td>
		<td>" . $tieto['ika'] . "</td>
		<td>" . $tieto['ammatti'] . "</td><tr>";
		
		 
		
		
	}
"</table>";





// suljetaan yhteys
mysqli_close($yhteys);
?>