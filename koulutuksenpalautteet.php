<?php
//sisällytetään yhteystidot
include 'yhteys2.php';

header('Content-Type: text/html; charset=UTF-8');

// tallennetaan postatut tiedot variableihin

$nimi = $_POST['var2'];


$koulutus = mysqli_query($yhteys,"SELECT koulutuksennimi FROM koulutus WHERE koulutusid = $nimi");
		while($row = mysqli_fetch_array($koulutus))
		{
		echo "<table><tr><td><h1>" . $row['koulutuksennimi'] . "</h1><br></td></table>";
		}
		
		
$toteuttaja = mysqli_query($yhteys,"SELECT toteuttaja FROM koulutus WHERE koulutusid = $nimi");
		while($row = mysqli_fetch_array($toteuttaja))
		{
		echo "<table><tr><td>Koulutuksen toteuttaja&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$row['toteuttaja']."</td><tr>";
		}

$sql2 = mysqli_query ($yhteys,"SELECT COUNT(*) AS luku2 FROM ilmoittautuneet WHERE koulutusid = $nimi");
$lukudata2=mysqli_fetch_assoc($sql2);		
		
$sql1 = mysqli_query ($yhteys,"SELECT COUNT(*) AS luku FROM koulutuspalaute WHERE koulutusid = $nimi");
$lukudata=mysqli_fetch_assoc($sql1);


		echo "<td>Ilmoittautuneita</td><td>".$lukudata2['luku2']. "</td><td></td><tr>";
		echo "<td>Palautteita</td><td>".$lukudata['luku']. "</td><td></td><tr>";

//kokonaisarvosana AVG
$arvosana = "SELECT kokonaisarvosana, AVG(NULLIF(kokonaisarvosana,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$kokonaisarvosana = mysqli_query($yhteys,$arvosana);

//suositus AVG
$suositus = mysqli_query($yhteys,"SELECT COUNT(*) as kyllaluku FROM koulutuspalaute WHERE koulutusid = $nimi AND suositus = 1"); 
$suositustulos = mysqli_fetch_assoc($suositus);

$eisuositus = mysqli_query($yhteys,"SELECT COUNT(*) as eiluku FROM koulutuspalaute WHERE koulutusid = $nimi AND suositus = 2"); 
$eisuositustulos = mysqli_fetch_assoc($eisuositus);

echo "<td>KYLL&Auml; suosittelisi koulutusta</td><td>".$suositustulos['kyllaluku']. "</td><tr>";
echo "<td>EI suosittelisi koulutusta</td><td>".$eisuositustulos['eiluku']. "</td><tr>";






while($row = mysqli_fetch_array($kokonaisarvosana)){
	echo 
		"<td>Koulutuksen arvosana (4-10)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>". number_format($row['AVG(NULLIF(kokonaisarvosana,0))'],1) . "</td><tr><td><br><br></td>"; 
		}
	"</table>";
		
//tulos1
$sql2a1 = "SELECT 2a1, AVG(NULLIF(2a1,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos1 = mysqli_query($yhteys,$sql2a1);

//tulos2
$sql2a2 = "SELECT 2a2, AVG(NULLIF(2a2,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos2 = mysqli_query($yhteys,$sql2a2);

//tulos3
$sql2a3 = "SELECT 2a3, AVG(NULLIF(2a3,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos3 = mysqli_query($yhteys,$sql2a3);

//tulos4
$sql2a4 = "SELECT 2a4, AVG(NULLIF(2a4,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos4 = mysqli_query($yhteys,$sql2a4);

//tulos5
$sql2a5 = "SELECT 2a5, AVG(NULLIF(2a5,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos5 = mysqli_query($yhteys,$sql2a5);

//2a yhteisKA
$sql2aka = "SELECT AVG(((NULLIF(2a1,0)) + (NULLIF(2a2,0)) + (NULLIF(2a3,0)) + (NULLIF(2a4,0)) + (NULLIF(2a5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos2aka = mysqli_query($yhteys,$sql2aka);


//tulos6
$sql2b1 = "SELECT 2b1, AVG(NULLIF(2b1,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos6 = mysqli_query($yhteys,$sql2b1);

//tulos7
$sql2b2 = "SELECT 2b2, AVG(NULLIF(2b2,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos7 = mysqli_query($yhteys,$sql2b2);

//tulos8
$sql2b3 = "SELECT 2b3, AVG(NULLIF(2b3,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos8 = mysqli_query($yhteys,$sql2b3);

//tulos9
$sql2b4 = "SELECT 2a4, AVG(NULLIF(2b4,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos9 = mysqli_query($yhteys,$sql2b4);

//tulos10
$sql2b5 = "SELECT 2b5, AVG(NULLIF(2b5,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos10 = mysqli_query($yhteys,$sql2b5);

//2b yhteisKA
$sql2bka = "SELECT AVG(((NULLIF(2b1,0)) + (NULLIF(2b2,0)) + (NULLIF(2b3,0)) + (NULLIF(2b4,0)) + (NULLIF(2b5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos2bka = mysqli_query($yhteys,$sql2bka);

//tulos11
$sql2c1 = "SELECT 2a1, AVG(NULLIF(2c1,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos11 = mysqli_query($yhteys,$sql2c1);

//tulos12
$sql2c2 = "SELECT 2a2, AVG(NULLIF(2c2,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos12 = mysqli_query($yhteys,$sql2c2);

//tulos13
$sql2c3 = "SELECT 2c3, AVG(NULLIF(2c3,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos13 = mysqli_query($yhteys,$sql2c3);

//tulos14
$sql2c4 = "SELECT 2c4, AVG(NULLIF(2c4,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos14 = mysqli_query($yhteys,$sql2c4);

//tulos15
$sql2c5 = "SELECT 2c5, AVG(NULLIF(2c5,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos15 = mysqli_query($yhteys,$sql2c5);

//2b yhteisKA
$sql2cka = "SELECT AVG(((NULLIF(2c1,0)) + (NULLIF(2c2,0)) + (NULLIF(2c3,0)) + (NULLIF(2c4,0)) + (NULLIF(2c5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos2cka = mysqli_query($yhteys,$sql2cka);

//tulos16
$sql2d1 = "SELECT 2d1, AVG(NULLIF(2d1,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos16 = mysqli_query($yhteys,$sql2d1);

//tulos17
$sql2d2 = "SELECT 2d2, AVG(NULLIF(2d2,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos17 = mysqli_query($yhteys,$sql2d2);

//tulos18
$sql2d3 = "SELECT 2d3, AVG(NULLIF(2d3,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos18 = mysqli_query($yhteys,$sql2d3);

//tulos19
$sql2d4 = "SELECT 2d4, AVG(NULLIF(2d4,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos19 = mysqli_query($yhteys,$sql2d4);

//tulos20
$sql2d5 = "SELECT 2d5, AVG(NULLIF(2d5,0)) FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos20 = mysqli_query($yhteys,$sql2d5);

//2b yhteisKA
$sql2dka = "SELECT AVG(((NULLIF(2d1,0)) + (NULLIF(2d2,0)) + (NULLIF(2d3,0)) + (NULLIF(2d4,0)) + (NULLIF(2d5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos2dka = mysqli_query($yhteys,$sql2dka);

//tulos21
$sql3a = "SELECT 3a FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos21 = mysqli_query($yhteys,$sql3a);

//tulos22
$sql3b = "SELECT 3b FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos22 = mysqli_query($yhteys,$sql3b);

//tulos23
$sql3c = "SELECT 3c FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos23 = mysqli_query($yhteys,$sql3c);

//tulos24
$sql3d = "SELECT 3d FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos24 = mysqli_query($yhteys,$sql3d);

//2a yhteisKA
$sql2kaikki = "SELECT AVG(((NULLIF(2a1,0)) + (NULLIF(2a2,0)) + (NULLIF(2a3,0)) + (NULLIF(2a4,0)) + (NULLIF(2a5,0)) + (NULLIF(2b1,0)) + (NULLIF(2b2,0)) + (NULLIF(2b3,0)) + (NULLIF(2b4,0)) + (NULLIF(2b5,0)) + (NULLIF(2c1,0)) + (NULLIF(2c2,0)) + (NULLIF(2c3,0)) + (NULLIF(2c4,0)) + (NULLIF(2c5,0)) + (NULLIF(2d1,0)) + (NULLIF(2d2,0)) + (NULLIF(2d3,0)) + (NULLIF(2d4,0)) + (NULLIF(2d5,0)))/20) AS keski FROM koulutuspalaute WHERE koulutusid = $nimi"; 
$tulos2kaikki = mysqli_query($yhteys,$sql2kaikki);

echo "<table><tr><td><h2>2. Koulutus<h2></td>";

while($row = mysqli_fetch_array($tulos1)){
	echo 
		"<tr><td><h3>a. Koulutustapahtuma<h3></td><td align='right'><h3>KA</h3></td><tr>
		<td>Olin etukäteen tietoinen koulutuksen kokonaisuudesta</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2a1,0))'],1) . "</td><tr>"; 
		}

while($row = mysqli_fetch_array($tulos2)){
	echo 
		"
		<td>Koulutustapahtumasta tiedotettiin riittävästi etukäteen</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2a2,0))'],1) . "</td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos3)){
	echo 
		"
		<td>Koulutus vastasi sisallöltään sen tavoitteita ja ennakkotietoja</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2a3,0))'],1) . "</td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos4)){
	echo 
		"
		<td>Käytännön järjestelyt toimivat hyvin</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2a4,0))'],1) . "</td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos5)){
	echo 
		"
		<td>Koulutustilat ja -laitteet olivat asianmukaiset</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2a5,0))'],1) . "</td><tr>"; 
		}

while($row = mysqli_fetch_array($tulos2aka)){
	echo "<td><b>Yhteis KA</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['keski'],1) . "</b></td><tr><td><br></td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos6)){
	echo 
		"<tr><td><h3>b. Koulutuksen hyöty<h3></td><tr>
		<td>Koulutus vastasi tarpeitani</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2b1,0))'],1) . "</td><tr>"; 
		}

while($row = mysqli_fetch_array($tulos7)){
	echo 
		"
		<td>Koulutus oli sisällöltään onnistunut</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2b2,0))'],1) . "</td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos8)){
	echo 
		"
		<td>Koin koulutuksen sisällön mielenkiintoiseksi</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2b3,0))'],1) . "</td><tr>"; 
		}

while($row = mysqli_fetch_array($tulos9)){
	echo 
		"
		<td>Koulutus edistää ammatillista kehittymistäni</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2b4,0))'],1) . "</td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos10)){
	echo 
		"
		<td>Koulutuksen opit ovat sovellettavissa käytäntöön</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2b5,0))'],1) . "</td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos2bka)){
	echo "<td><b>Yhteis KA</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['keski'],1) . "</b></td><tr><td><br></td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos11)){
	echo 
		"<tr><td><h3>c. Koulutuksessa käytetyt menetelmat<h3></td><tr>
		<td>Koulutus vastasi tarpeitani</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2c1,0))'],1) . "</td><tr>"; 
		}

while($row = mysqli_fetch_array($tulos12)){
	echo 
		"
		<td>Koulutus oli sisällöltään onnistunut</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2c2,0))'],1) . "</td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos13)){
	echo 
		"
		<td>Koin koulutuksen sisällön mielenkiintoiseksi</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2c3,0))'],1) . "</td><tr>"; 
		}

while($row = mysqli_fetch_array($tulos14)){
	echo 
		"
		<td>Koulutus edistää ammatillista kehittymistäni</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2c4,0))'],1) . "</td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos15)){
	echo 
		"
		<td>Koulutuksen opit ovat sovellettavissa käytäntöön</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2c5,0))'],1) . "</td><tr>"; 
		}

while($row = mysqli_fetch_array($tulos2cka)){
	echo "<td><b>Yhteis KA</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['keski'],1) . "</b></td><tr><td><br></td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos16)){
	echo 
		"<tr><td><h3>d. Kouluttaja<h3></td><tr>
		<td>Koulutus vastasi tarpeitani</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2d1,0))'],1) . "</td><tr>"; 
		}

while($row = mysqli_fetch_array($tulos17)){
	echo 
		"
		<td>Koulutus oli sisällöltään onnistunut</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2d2,0))'],1) . "</td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos18)){
	echo 
		"
		<td>Koin koulutuksen sisällön mielenkiintoiseksi</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2d3,0))'],1) . "</td><tr>"; 
		}

while($row = mysqli_fetch_array($tulos19)){
	echo 
		"
		<td>Koulutus edistää ammatillista kehittymistäni</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2d4,0))'],1) . "</td><tr>"; 
		}
		
while($row = mysqli_fetch_array($tulos20)){
	echo 
		"
		<td>Koulutuksen opit ovat sovellettavissa käytäntöön</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['AVG(NULLIF(2d5,0))'],1) . "</td><tr>"; 
		}

while($row = mysqli_fetch_array($tulos2dka)){
	echo "<td><b>Yhteis KA</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['keski'],1) . "</b></td><tr><td><br></td><tr>"; 
		}

		
while($row = mysqli_fetch_array($tulos2kaikki)){
	echo "<td><b>Kaikki yhteensä KA</b></td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". number_format($row['keski'],1) . "</b></td><tr><td><br></td><tr>"; 
		}
		
		
"</table>";
		
echo "<table width=\"800px\"><tr><td><h2>3. Vapaa sana<h2></td><tr><td><b>a. Mikä oli mielestäsi koulutuksen parasta antia?</b></td><tr>";
while($row = mysqli_fetch_array($tulos21)){
	if (!empty($row['3a'])){
	echo "<td><br>". $row['3a'] . "<hr></td><tr>";} 
		}

		
echo "<td><b>b. Parannusehdotuksia?</b></td><tr>";
while($row = mysqli_fetch_array($tulos22)){
	if (!empty($row['3b'])){
	echo "<td><br>". $row['3b'] . "<hr></td><tr>"; }
	
	}
		

echo "<td><b>c. Minkälaiseen koulutukseen haluaisit jatkossa osallistua?</b></td><tr>";
while($row = mysqli_fetch_array($tulos23)){
	if (!empty($row['3c'])){
	echo "<td><br>". $row['3c'] . "<hr></td><tr>";}
		}
		
echo "<td><b>d. Muita kommentteja?</b></td><tr>";
while($row = mysqli_fetch_array($tulos24)){
	if (!empty($row['3d'])){
	echo "<td><br>". $row['3d'] . "<hr></td><tr>"; }
		}		
		
"</table>";

		



// suljetaan yhteys
mysqli_close($yhteys);
?>