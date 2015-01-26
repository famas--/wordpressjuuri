<?php

//yhteyksien määrittely
$servername = "localhost";
$username = "root";
$password = "";
$db = "koulutushanke";



// luo yhteys
$yhteys = mysqli_connect($servername, $username, $password, $db);



// tarkista yhteys
if (!$yhteys) {
    die("yhteys ei onnistunut: " . mysqli_error());
} 


?>