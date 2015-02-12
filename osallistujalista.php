<?php
//sisällytetään yhteystidot
include 'yhteys.php';

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=document_name.xls");

// tallennetaan postatut tiedot variableihin


$id = $_POST['var2'];


$sql = mysqli_query ($yhteys,"SELECT * FROM koulutus WHERE koulutusid = $id");
	while($koulutus = mysqli_fetch_array ($sql)){
echo "
<html><head>
<style>
table{
max-width:900px;
}
.solu2{
	width:300px;
}
.solu1,.solu3{
	width:200px;
}
.solu3,.solu2,.solu1{
	border-style: solid;
	height: 30px;
}
</style>
</head><body>

<table>
		<td>Koulutus:</td><td>" . $koulutus['koulutuksennimi'] . "</td><tr>";}
		
$sql = mysqli_query ($yhteys,"SELECT * FROM koulutus WHERE koulutusid = $id");
	while($tieto = mysqli_fetch_array ($sql)){
		
		echo "
		
		<td>Toteuttaja:</td><td>" . $tieto['toteuttaja'] . "</td></tr>
		<td>Paikka:</td><td>" . $tieto['paikka'] . "</td></tr>
		<td>Alkaa:</td><td>" . date("d.m.Y", strtotime($tieto['aloitusaika'])) . "&nbsp;&nbsp;&nbsp;klo:&nbsp;" . substr($tieto['aloitusaikaklo'], 0, 5) . "</td></tr>
		<td>Loppuu:</td><td>" . date("d.m.Y", strtotime($tieto['lopetusaika'])) . "&nbsp;&nbsp;&nbsp;klo:&nbsp;" . substr($tieto['lopetusaikaklo'], 0, 5) . "</td></tr>
		
		<br>"; 
		
		
	}
		

echo "<td class=\"solu1\"><b>Nimi</b></td><td class=\"solu1\"><b>Yritys</b></td><td class=\"solu2\"><b>S&auml;hk&ouml;posti</b></td><td class=\"solu3\"><b>Kuittaus</b></td><tr>";



$sql = mysqli_query ($yhteys,"SELECT * FROM ilmoittautuneet WHERE koulutusid = $id");
	
	while($tieto = mysqli_fetch_array ($sql)){
		
		echo "
		
		
		<td class=\"solu1\">" . $tieto['nimi'] . "</td>
		<td class=\"solu1\">" . $tieto['yritys'] . "</td>
		<td class=\"solu1\"></td>
		<td class=\"solu1\"></td><tr>";
	
		
		 
		
		
	};
echo "
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td><tr>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td><tr>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td><tr>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td><tr>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td><tr>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td><tr>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td><tr>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td><tr>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>
<td class=\"solu1\"></td>

</table></body></html>";





// suljetaan yhteys
mysqli_close($yhteys);
?>