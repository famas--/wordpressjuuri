<?php
//sisällytetään yhteystidot
include 'yhteys2.php';

echo "<html><head><title>testdoc</title>
<script src=\"http://www.nihakseutu.com/wordpress/jquery-1.11.2.js\"></script>
<script>
jQuery(window).scroll(function() {
    jQuery('.div5').css('top', document.body.scrollTop);
	jQuery('.div11').css('left', document.body.scrollLeft);
});
</script>
<style type=\"text/css\">
	.wrap
	{
	font:16px Calibri;
	margin: 0 0 0 -8px;
	width:4265px;
	}
    .div1 { border-collapse:separate; border-top: 3px solid grey; }
    .div2 {
        margin:0;
		width:3000px;
        
	}
		
    .div8 {
		width:3000px;
		position:absolute;
		
    }
	
	.div7 {
		border-style: solid;
		border-color: #000;
		border-width:1px;
		float:left;
		width:100px;
		height:100px;
		padding: 0px 0px 0px 0px;
		background-color: #fff;
		}
		
	.div13 {
		border-style: solid;
		border-color: #000;
		border-width: 1px;
		background-color:#fff;
		color:#000;
		padding: 0px 0px 0px 0px;
		font-size:30px;
		top:0;
		width:300px;
		height:100px;
		position: fixed;
		z-index: 999;
        
		}

	

	
    .div6{
		border-style: solid;
		border-width: 1px;
		width:100px;
		float:left;
  
	}
	.div11{
		border-style: solid;
		border-width: 1px;
		position:relative;
		width:300px;
		float:left;
		background-color: #fff;
	}
	
    .div4 {
		
		margin: 0 0 0 0;
		padding: 0 0 0 0;
		background-color:#fff;
		width:3000px;
		display: inline-block;
		
		
		
    }
	
	.div5 {
		margin: -8px 0 0 302px;
		width: 3000px;
		position:relative;
	
		
	}

	
	.div9 {
		margin: 0 0 0 0;
		z-index:-999;
	}
	
	
	
</style>
<script>

</script>
</head><body>";


$nimi = "SELECT * FROM koulutus";
$nimi2 = mysqli_query($yhteys,$nimi);



echo 	
			"<div class=\"wrap\">
			<div class=\"div4\">
				<div class=\"div13\"><form action=\"http://www.nihakseutu.com/wordpress/palautteet_yhteenveto_excel.php\" method=\"get\">
    <input type=\"submit\" value=\"LATAA EXCEL\" 
         name=\"Submit\" id=\"frm1_submit\" style=\"position:fixed;\" />
		</form>Koulutus</div>
				<div class=\"div5\">
				<div class=\"div7\"><b>KOULUTUS- TAPAHTUMA</b></div>
				<div class=\"div7\">Olin etuk&auml;teen tietoinen koulutuksen kokonaisuudesta</div>
				<div class=\"div7\">Koulutus- tapahtumasta tiedotettiin riitt&auml;v&auml;sti etuk&auml;teen</div>
				<div class=\"div7\">Koulutus vastasi sis&auml;ll&ouml;lt&auml;&auml;n sen tavoitteita ja ennakkotietoja</div>
				<div class=\"div7\">K&auml;yt&auml;nn&ouml;n j&auml;rjestelyt toimivat hyvin</div>
				<div class=\"div7\">Koulutustilat ja -laitteet olivat asianmukaiset</div>
				
				
				<div class=\"div7\"><b>KOULUTUKSEN HY&Ouml;TY</b></div>
				<div class=\"div7\">Koulutus vastasi tarpeitani</div>
				<div class=\"div7\">Koulutus oli sis&auml;ll&ouml;lt&auml;&auml;n onnistunut</div>
				<div class=\"div7\">Koin koulutuksen sis&auml;ll&ouml;n mielenkiintoiseksi</div>
				<div class=\"div7\">Koulutus edist&auml;&auml; ammatillista kehittymist&auml;ni</div>
				<div class=\"div7\">Koulutuksen opit ovat sovellettavissa k&auml;yt&auml;nt&ouml;&ouml;n</div>
				
				
				<div class=\"div7\"><b>KOULUTUKSESSA K&Auml;YTETYT MENETELM&Auml;T</b></div>
				<div class=\"div7\">Koulutuksessa k&auml;ytettiin monipuolisia menetelmi&auml;</div>
				<div class=\"div7\">Koulutuksessa k&auml;ytetytmenetelm&auml;t sopivat aihesis&auml;lt&ouml;&ouml;n</div>
				<div class=\"div7\">Koulutus aktivoi kysymyksiin ja keskusteluun</div>
				<div class=\"div7\">Koulutuksen oppimateriaali tuki oppimista</div>
				<div class=\"div7\">Et&auml;opetusp&auml;iv&auml;n teht&auml;v&auml;t tukivat oppimista</div>
				
				
				<div class=\"div7\"><b>KOULUTTAJA</b></div>
				<div class=\"div7\">Kouluttaja oli asiantunteva</div>
				<div class=\"div7\">Kouluttajan opetus oli selke&auml;&auml;</div>
				<div class=\"div7\">Vuorovaikutus kouluttajan kanssa sujui hyvin</div>
				<div class=\"div7\">Yhteydenpito kouluttajaan onnistui et&auml;opetusp&auml;iv&auml;n&auml;</div>
				<div class=\"div7\">Kouluttaja onnistui teht&auml;v&auml;ss&auml;&auml;n</div>
		</div></div>";

while($row = mysqli_fetch_array($nimi2)){
	 
	echo	"<div class=\"div9\">
				<div class=\"div2\">
				
				
				
	
	
			
 	
				
				
					
					
					<div class=\"div11\">". $row['koulutuksennimi']."
						
						</div>";
						
						
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
	echo "<div class=\"div6\">" . number_format($tieto1['keski'],1) . "</div>";}
	
	while($tieto5 = mysqli_fetch_array($row1)){
	echo "<div class=\"div6\">" . number_format($tieto5['keski'],1) . "</div>";}
	
	while($tieto6 = mysqli_fetch_array($row2)){
	echo "<div class=\"div6\">" . number_format($tieto6['keski'],1) . "</div>";}
	
	while($tieto7 = mysqli_fetch_array($row3)){
	echo "<div class=\"div6\">" . number_format($tieto7['keski'],1) . "</div>";}
	
	while($tieto8 = mysqli_fetch_array($row4)){
	echo "<div class=\"div6\">" . number_format($tieto8['keski'],1) . "</div>";}
	
	while($tieto9 = mysqli_fetch_array($row5)){
	echo "<div class=\"div6\">" . number_format($tieto9['keski'],1) . "</div>";}
	
	
	
	while($tieto2 = mysqli_fetch_array($yht2)){
	echo "<div class=\"div6\">" . number_format($tieto2['keski'],1) . "</div>";}
	
	while($tieto10 = mysqli_fetch_array($row6)){
	echo "<div class=\"div6\">" . number_format($tieto10['keski'],1) . "</div>";}
	
	while($tieto11 = mysqli_fetch_array($row7)){
	echo "<div class=\"div6\">" . number_format($tieto11['keski'],1) . "</div>";}
	
	while($tieto12 = mysqli_fetch_array($row8)){
	echo "<div class=\"div6\">" . number_format($tieto12['keski'],1) . "</div>";}
	
	while($tieto13 = mysqli_fetch_array($row9)){
	echo "<div class=\"div6\">" . number_format($tieto13['keski'],1) . "</div>";}
	
	while($tieto14 = mysqli_fetch_array($row10)){
	echo "<div class=\"div6\">" . number_format($tieto14['keski'],1) . "</div>";}
	
	
	
	while($tieto3 = mysqli_fetch_array($yht3)){
	echo "<div class=\"div6\">" . number_format($tieto3['keski'],1) . "</div>";}
	
	while($tieto15 = mysqli_fetch_array($row11)){
	echo "<div class=\"div6\">" . number_format($tieto15['keski'],1) . "</div>";}
	
	while($tieto16 = mysqli_fetch_array($row12)){
	echo "<div class=\"div6\">" . number_format($tieto16['keski'],1) . "</div>";}
	
	while($tieto17 = mysqli_fetch_array($row13)){
	echo "<div class=\"div6\">" . number_format($tieto17['keski'],1) . "</div>";}
	
	while($tieto18 = mysqli_fetch_array($row14)){
	echo "<div class=\"div6\">" . number_format($tieto18['keski'],1) . "</div>";}
	
	while($tieto19 = mysqli_fetch_array($row15)){
	echo "<div class=\"div6\">" . number_format($tieto19['keski'],1) . "</div>";}
	
	
	while($tieto4 = mysqli_fetch_array($yht4)){
	echo "<div class=\"div6\">" . number_format($tieto4['keski'],1) . "</div>";}
	
	while($tieto20 = mysqli_fetch_array($row16)){
	echo "<div class=\"div6\">" . number_format($tieto20['keski'],1) . "</div>";}
	
	while($tieto21 = mysqli_fetch_array($row17)){
	echo "<div class=\"div6\">" . number_format($tieto21['keski'],1) . "</div>";}
	
	while($tieto22 = mysqli_fetch_array($row18)){
	echo "<div class=\"div6\">" . number_format($tieto22['keski'],1) . "</div>";}
	
	while($tieto23 = mysqli_fetch_array($row19)){
	echo "<div class=\"div6\">" . number_format($tieto23['keski'],1) . "</div>";}
	
	while($tieto24 = mysqli_fetch_array($row20)){
	echo "<div class=\"div6\">" . number_format($tieto24['keski'],1) . "</div>";}
	
	
	
	
	
	

	
		}
	echo "</div></div></div>";

echo "</body>";
echo "</html>";

	







	
?>