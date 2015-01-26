<?php

//sisällytetään yhteystidot
include 'yhteys.php';

$q = $_GET['q'];


$sql = mysqli_query($yhteys,"SELECT * FROM koulutus WHERE koulutusid ='".$q."'");
while($tulos = mysqli_fetch_array($sql)){
  echo "<table><tr>";
  echo "<td width=\"250px\">Paikka</td><td>" . $tulos['paikka'] . "</td><tr>";
  echo "<td width=\"250px\">Toteuttaja</td><td>" . $tulos['toteuttaja'] . "</td><tr>";
  echo "<td width=\"250px\">Ajankohta</td><td>" . date("d.m.Y", strtotime($tulos['aloitusaika'])) . " - " . date("d.m.Y", strtotime($tulos['lopetusaika'])) . "</td><tr>";
  echo "</tr></table>";
}

?>