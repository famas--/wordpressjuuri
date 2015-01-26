<?php

//sisällytetään yhteystidot
include 'yhteys2.php';



// tallennetaan postatut tiedot variableihin
$nimi = $_POST['koulutuksennimi'];
$paikka = $_POST['paikka'];
$aloitusaika = $_POST['aloitusaika'];
$aloitusaikaklo = $_POST['aloitusaikaklo'];
$lopetusaika = $_POST['lopetusaika'];
$lopetusaikaklo = $_POST['lopetusaikaklo'];
$ilmoittautuminen = $_POST['ilmoittautuminen'];
$ilmoittautuminenklo = $_POST['ilmoittautuminenklo'];
$ryhmankoko = $_POST['ryhmankoko'];
$toteuttaja = $_POST['toteuttaja'];
$email = $_POST['email'];
$puh = $_POST['puh'];
$kuvaus = $_POST['kuvaus'];
$kesto = $_POST['kesto'];
$hinta = $_POST['hinta'];
$palaute = $_POST['palaute'];




// viedään $nimi variableen tallennettu tieto koulutustaulukkoon tietueeseen koulutuksen nimi
$sql = "INSERT INTO koulutus (
		koulutuksennimi,
		paikka,
		aloitusaika,
		aloitusaikaklo,
		lopetusaika,
		lopetusaikaklo,
		ilmoittautuminen,
		ilmoittautuminenklo,
		ryhmankoko,
		toteuttaja,
		email,
		puh,
		kuvaus,
		kesto,
		hinta,
		palaute
		) VALUES ('$nimi','$paikka','$aloitusaika','$aloitusaikaklo','$lopetusaika','$lopetusaikaklo','$ilmoittautuminen','$ilmoittautuminenklo','$ryhmankoko','$toteuttaja','$email','$puh','$kuvaus','$kesto','$hinta','$palaute')";
		



// ilmoitus jos vienti epäonnistui
if (!mysqli_query($yhteys,$sql)) {
    die("error: " . mysqli_error());
} 
echo "Tiedot vietiin tietokantaan";


// suljetaan yhteys
mysqli_close($yhteys);
?>