<!DOCTYPE html>
<html>
<body>

<form action="tavarakoulutustaulukkoon2.php" method="post"/>
<table>
<tr>
<td>Koulutuksen nimi:</td> <td><input type="text" name="koulutuksennimi" size="40"></td><tr>
<td>Paikka: </td> <td><input type="text" name="paikka" size="40"></td><tr>


<td>Aloitusaika:</td><td>
<input type="date" name="aloitusaika">
&nbsp;&nbsp;&nbsp;&nbsp;klo:
<input type="time" name="aloitusaikaklo">


</td><tr>


<td>Lopetusaika:</td><td>
<input type="date" name="lopetusaika">
&nbsp;&nbsp;&nbsp;&nbsp;klo:
<input type="time" name="lopetusaikaklo"></td><tr>

<td>Ilmoittautuminen p&auml;&auml;ttyy:</td><td>
<input type="date" name="ilmoittautuminen">
&nbsp;&nbsp;&nbsp;&nbsp;klo:
<input type="time" name="ilmoittautuminenklo"></td><tr>


<td>Ryhm&auml;n koko: </td> <td><input type="text" name="ryhmankoko" size="40"></td><tr>
<td>Koulutuksen toteuttaja: </td><td><input type="text" name="toteuttaja" size="40"></td><tr>
<td>Yhteyshenkil&oumln s&auml;hk&oumlposti:</td> <td><input type="text" name="email" size="40"></td><tr>
<td>Yhteyshenkil&oumln puhelin: </td> <td><input type="text" name="puh" size="40"></td><tr>
<td>Koulutuksen kesto: </td> <td><input type="text" name="kesto" size="40"></td><tr>
<td>Koulutuksen hinta: </td> <td><input type="text" name="hinta" size="40"></td><tr>
<td>Koulutuksen kuvaus: </td> <td><textarea type="text" rows="10" cols="50" name="kuvaus"></textarea></td><tr>
<td><p>Koulutuksesta voi antaa palautteen:</p></td><tr>
<td>Kylla</td> <td><input type="radio" name="palaute" value="kylla"></td><tr>
<td>Ei</td> <td><input type="radio" name="palaute" value="ei"></td><tr>
</table><br>
<input type="submit" value="Tallenna tietokantaan">
</form>

</body>
</html>