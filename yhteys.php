<?php

//yhteyksien määrittely
$servername = "localhost";
$username = "root";
$password = "";
$db = "koulutushanke";



// luo yhteys
$yhteys = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($yhteys,'utf8');


// tarkista yhteys
if (!$yhteys) {
    die("yhteys ei onnistunut: " . mysqli_error());
} 


?>