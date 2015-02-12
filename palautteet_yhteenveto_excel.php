<?php
//sisällytetään yhteystidot
include 'yhteys.php';


header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=document_name.xls");




$nimi = "SELECT * FROM koulutus";
$nimi2 = mysqli_query($yhteys,$nimi);


echo "<html><head>
<style>
.row1{
width:100px;
height:140px;
}
.row2{
width:200px;
height:140px;
}
</style>
</head><body>";



echo "<table border=\"1px\">
		<td class=\"row2\"><h2>Koulutus<h2></td>
		<td class=\"row1\"><b>KOULUTUS- TAPAHTUMA</b></td>
		<td class=\"row1\">Olin etuk&auml;teen tietoinen koulutuksen kokonaisuudesta</td>
		<td class=\"row1\">Koulutus- tapahtumasta tiedotettiin riitt&auml;v&auml;sti etuk&auml;teen</td>
		<td class=\"row1\">Koulutus vastasi sis&auml;ll&ouml;lt&auml;&auml;n sen tavoitteita ja ennakkotietoja</td>
		<td class=\"row1\">K&auml;yt&auml;nn&ouml;n j&auml;rjestelyt toimivat hyvin</td>
		<td class=\"row1\">Koulutustilat ja -laitteet olivat asianmukaiset</td>
		
		<td class=\"row1\"><b>KOULUTUKSEN HY&Ouml;TY</b></td>
		<td class=\"row1\">Koulutus vastasi tarpeitani</td>
		<td class=\"row1\">Koulutus oli sis&auml;ll&ouml;lt&auml;&auml;n onnistunut</td>
		<td class=\"row1\">Koin koulutuksen sis&auml;ll&ouml;n mielenkiintoiseksi</td>
		<td class=\"row1\">Koulutus edist&auml;&auml; ammatillista kehittymist&auml;ni</td>
		<td class=\"row1\">Koulutuksen opit ovat sovellettavissa k&auml;yt&auml;nt&ouml;&ouml;n</td>
		
		<td class=\"row1\"><b>KOULUTUKSESSA K&Auml;YTETYT MENETELM&Auml;T</b></td>
		<td class=\"row1\">Koulutuksessa k&auml;ytettiin monipuolisia menetelmi&auml;</td>
		<td class=\"row1\">Koulutuksessa k&auml;ytetytmenetelm&auml;t sopivat aihesis&auml;lt&ouml;&ouml;n</td>
		<td class=\"row1\">Koulutus aktivoi kysymyksiin ja keskusteluun</td>
		<td class=\"row1\">Koulutuksen oppimateriaali tuki oppimista</td>
		<td class=\"row1\">Et&auml;opetusp&auml;iv&auml;n teht&auml;v&auml;t tukivat oppimista</td>
		
		<td class=\"row1\"><b>KOULUTTAJA</b></td>
		<td class=\"row1\">Kouluttaja oli asiantunteva</td>
		<td class=\"row1\">Kouluttajan opetus oli selke&auml;&auml;</td>
		<td class=\"row1\">Vuorovaikutus kouluttajan kanssa sujui hyvin</td>
		<td class=\"row1\">Yhteydenpito kouluttajaan onnistui et&auml;opetusp&auml;iv&auml;n&auml;</td>
		<td class=\"row1\">Kouluttaja onnistui teht&auml;v&auml;ss&auml;&auml;n</td>
		
		<tr>";

while($row = mysqli_fetch_array($nimi2)){
	 
	echo	"<td>" . $row['koulutuksennimi']."</td>";
	$koulutuksennimi = $row['koulutusid'];
	$row1 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2a1,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row2 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2a2,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row3 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2a3,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row4 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2a4,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row5 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2a5,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row6 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2b1,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row7 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2b2,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row8 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2b3,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row9 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2b4,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row10 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2b5,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row11 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2c1,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row12 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2c2,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row13 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2c3,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row14 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2c4,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row15 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2c5,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row16 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2d1,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row17 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2d2,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row18 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2d3,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row19 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2d4,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$row20 = mysqli_query($yhteys,"SELECT AVG(NULLIF(2d5,0)) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");

	$yht1 = mysqli_query($yhteys,"SELECT AVG(((NULLIF(2a1,0)) + (NULLIF(2a2,0)) + (NULLIF(2a3,0)) + (NULLIF(2a4,0)) + (NULLIF(2a5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$yht2 = mysqli_query($yhteys,"SELECT AVG(((NULLIF(2b1,0)) + (NULLIF(2b2,0)) + (NULLIF(2b3,0)) + (NULLIF(2b4,0)) + (NULLIF(2b5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$yht3 = mysqli_query($yhteys,"SELECT AVG(((NULLIF(2c1,0)) + (NULLIF(2c2,0)) + (NULLIF(2c3,0)) + (NULLIF(2c4,0)) + (NULLIF(2c5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");
	$yht4 = mysqli_query($yhteys,"SELECT AVG(((NULLIF(2d1,0)) + (NULLIF(2d2,0)) + (NULLIF(2d3,0)) + (NULLIF(2d4,0)) + (NULLIF(2d5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutusid = $koulutuksennimi");

	
	while($tieto1 = mysqli_fetch_array($yht1)){
	echo "<td>" . str_replace ('.',',',number_format($tieto1['keski'],1)) . "</td>";}
	
	while($tieto5 = mysqli_fetch_array($row1)){
	echo "<td>" . str_replace ('.',',',number_format($tieto5['keski'],1)) . "</td>";}
	
	while($tieto6 = mysqli_fetch_array($row2)){
	echo "<td>" . str_replace ('.',',',number_format($tieto6['keski'],1)) . "</td>";}
	
	while($tieto7 = mysqli_fetch_array($row3)){
	echo "<td>" . str_replace ('.',',',number_format($tieto7['keski'],1)) . "</td>";}
	
	while($tieto8 = mysqli_fetch_array($row4)){
	echo "<td>" . str_replace ('.',',',number_format($tieto8['keski'],1)) . "</td>";}
	
	while($tieto9 = mysqli_fetch_array($row5)){
	echo "<td>" . str_replace ('.',',',number_format($tieto9['keski'],1)) . "</td>";}
	
	
	
	while($tieto2 = mysqli_fetch_array($yht2)){
	echo "<td>" . str_replace ('.',',',number_format($tieto2['keski'],1)) . "</td>";}
	
	while($tieto10 = mysqli_fetch_array($row6)){
	echo "<td>" . str_replace ('.',',',number_format($tieto10['keski'],1)) . "</td>";}
	
	while($tieto11 = mysqli_fetch_array($row7)){
	echo "<td>" . str_replace ('.',',',number_format($tieto11['keski'],1)) . "</td>";}
	
	while($tieto12 = mysqli_fetch_array($row8)){
	echo "<td>" . str_replace ('.',',',number_format($tieto12['keski'],1)) . "</td>";}
	
	while($tieto13 = mysqli_fetch_array($row9)){
	echo "<td>" . str_replace ('.',',',number_format($tieto13['keski'],1)) . "</td>";}
	
	while($tieto14 = mysqli_fetch_array($row10)){
	echo "<td>" . str_replace ('.',',',number_format($tieto14['keski'],1)) . "</td>";}
	
	
	
	while($tieto3 = mysqli_fetch_array($yht3)){
	echo "<td>" . str_replace ('.',',',number_format($tieto3['keski'],1)) . "</td>";}
	
	while($tieto15 = mysqli_fetch_array($row11)){
	echo "<td>" . str_replace ('.',',',number_format($tieto15['keski'],1)) . "</td>";}
	
	while($tieto16 = mysqli_fetch_array($row12)){
	echo "<td>" . str_replace ('.',',',number_format($tieto16['keski'],1)) . "</td>";}
	
	while($tieto17 = mysqli_fetch_array($row13)){
	echo "<td>" . str_replace ('.',',',number_format($tieto17['keski'],1)) . "</td>";}
	
	while($tieto18 = mysqli_fetch_array($row14)){
	echo "<td>" . str_replace ('.',',',number_format($tieto18['keski'],1)) . "</td>";}
	
	while($tieto19 = mysqli_fetch_array($row15)){
	echo "<td>" . str_replace ('.',',',number_format($tieto19['keski'],1)) . "</td>";}
	
	
	while($tieto4 = mysqli_fetch_array($yht4)){
	echo "<td>" . str_replace ('.',',',number_format($tieto4['keski'],1)) . "</td>";}
	
	while($tieto20 = mysqli_fetch_array($row16)){
	echo "<td>" . str_replace ('.',',',number_format($tieto20['keski'],1)) . "</td>";}
	
	while($tieto21 = mysqli_fetch_array($row17)){
	echo "<td>" . str_replace ('.',',',number_format($tieto21['keski'],1)) . "</td>";}
	
	while($tieto22 = mysqli_fetch_array($row18)){
	echo "<td>" . str_replace ('.',',',number_format($tieto22['keski'],1)) . "</td>";}
	
	while($tieto23 = mysqli_fetch_array($row19)){
	echo "<td>" . str_replace ('.',',',number_format($tieto23['keski'],1)) . "</td>";}
	
	while($tieto24 = mysqli_fetch_array($row20)){
	echo "<td>" . str_replace ('.',',',number_format($tieto24['keski'],1)) . "</td></tr>";}
	
	
	
	
	
	

	
		}
	echo "</table>";

echo "</body>";
echo "</html>";

?>