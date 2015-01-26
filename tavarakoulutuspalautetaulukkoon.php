<?php

//sisällytetään yhteystidot
include 'yhteys.php';



// tallennetaan postatut tiedot variableihin




$koulutusid = $_POST['koulutusid'];




$k2a1 = $_POST['2a1'];
$k2a2 = $_POST['2a2'];
$k2a3 = $_POST['2a3'];
$k2a4 = $_POST['2a4'];
$k2a5 = $_POST['2a5'];
$k2b1 = $_POST['2b1'];
$k2b2 = $_POST['2b2'];
$k2b3 = $_POST['2b3'];
$k2b4 = $_POST['2b4'];
$k2b5 = $_POST['2b5'];
$k2c1 = $_POST['2c1'];
$k2c2 = $_POST['2c2'];
$k2c3 = $_POST['2c3'];
$k2c4 = $_POST['2c4'];
$k2c5 = $_POST['2c5'];
$k2d1 = $_POST['2d1'];
$k2d2 = $_POST['2d2'];
$k2d3 = $_POST['2d3'];
$k2d4 = $_POST['2d4'];
$k2d5 = $_POST['2d5'];
$k3a = $_POST['3a'];
$k3b = $_POST['3b'];
$k3c = $_POST['3c'];
$k3d = $_POST['3d'];
$kokonaisarvosana = $_POST['kokonaisarvosana'];
$suositus = $_POST['suositus'];


$query = "INSERT INTO koulutuspalaute (
		koulutusid,
		2a1,
		2a2,
		2a3,
		2a4,
		2a5,
		2b1,
		2b2,
		2b3,
		2b4,
		2b5,
		2c1,
		2c2,
		2c3,
		2c4,
		2c5,
		2d1,
		2d2,
		2d3,
		2d4,
		2d5,
		3a,
		3b,
		3c,
		3d,
		kokonaisarvosana,
		suositus
		) VALUES (
		'$koulutusid',
		'$k2a1',
		'$k2a2',
		'$k2a3',
		'$k2a4',
		'$k2a5',
		'$k2b1',
		'$k2b2',
		'$k2b3',
		'$k2b4',
		'$k2b5',
		'$k2c1',
		'$k2c2',
		'$k2c3',
		'$k2c4',
		'$k2c5',
		'$k2d1',
		'$k2d2',
		'$k2d3',
		'$k2d4',
		'$k2d5',
		'$k3a',
		'$k3b',
		'$k3c',
		'$k3d',
		'$kokonaisarvosana',
		'$suositus')";

// viedään $nimi variableen tallennettu tieto koulutustaulukkoon tietueeseen koulutuksen nimi

		
// ilmoitus jos vienti epäonnistui
if (!mysqli_query($yhteys,$query)) {
    die("error: " . mysqli_error($yhteys));
	}
echo "Tiedot vietiin tietokantaan";


// suljetaan yhteys
mysqli_close($yhteys);

?>