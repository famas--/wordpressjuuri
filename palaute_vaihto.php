<?php

//sisällytetään yhteystidot
include 'yhteys2.php';



// tallennetaan postatut tiedot variableihin
$id = $_POST['var2'];
$palaute = $_POST['var3'];
$kylla = "kylla";


if ($palaute == $kylla){
	mysqli_query ($yhteys,"UPDATE koulutus SET palaute='ei' WHERE koulutusid= $id ");
} 
 else {
	mysqli_query ($yhteys,"UPDATE koulutus SET palaute='kylla' WHERE koulutusid= $id ");
}





// suljetaan yhteys
mysqli_close($yhteys);

header("Location: http://www.nihakseutu.com/wordpress/?page_id=26"); /* Redirect browser */
exit();
?>