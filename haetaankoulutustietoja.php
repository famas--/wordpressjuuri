<?php

//sisällytetään yhteystidot
include 'yhteys.php';


//määritellään muuttuja
$q = $_GET['q'];


//haetaan koulutuksen id:llä koulutuksen paikka, toteuttaja ja ajankonta. echotaan tulokset. ajan muoto muutetaan suomalaiseksi 
$sql = mysqli_query($yhteys,"SELECT * FROM koulutus WHERE koulutusid ='".$q."'");
while($tulos = mysqli_fetch_array($sql)){
  echo "<table><tr>";
  echo "<td width=\"150px\">Paikka:</td><td>" . $tulos['paikka'] . "</td><tr>";
  echo "<td width=\"150px\">Toteuttaja:</td><td>" . $tulos['toteuttaja'] . "</td><tr>";
  echo "<td width=\"150px\">Ajankohta:</td><td>" . date("d.m.Y", strtotime($tulos['aloitusaika'])) . " - " . date("d.m.Y", strtotime($tulos['lopetusaika'])) . "</td><tr>";
  echo "</tr></table>";
}

?>