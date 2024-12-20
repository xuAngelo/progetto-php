<!DOCTYPE HTML>
<html>
<body>
<?php
//creazione variabile name
$name="Paolo";
//creazione ora e settarla con la ora della vita reale
$ora=date("H");
// condizioni per il saluto migliore per l ora in cui viviamo
if($ora>=8 && $ora<12){
    $saluto="Buongiorno";
}else if($ora>=12 && $ora<17){
     $saluto="Buon pomeriggio";
}else if($ora>=17 && $ora<=22){
     $saluto="Buona sera";
}else{
     $saluto="Buona notte";
}
echo "<p>$saluto $name,benvenuto nella mia prima pagina PHP</p>";
?>

<br>

<a href="appunti_esercizio_b.html">Per saperne fi piu del sito clicca qui</a>

<br>

<a href="index.html">Torna alla home</a>

</body>
</html>