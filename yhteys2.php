<?php

//yhteyksien määrittely
$servername = "localhost";
$username = "nihakseu_tuomas";
$password = "Ft6Gy7Hu8Ji9=";
$db = "nihakseu_wp_koulutushanke";



// luo yhteys
$yhteys = mysqli_connect($servername, $username, $password, $db);



// tarkista yhteys
if (!$yhteys) {
    die("yhteys ei onnistunut: " . mysqli_error());
} 


?>