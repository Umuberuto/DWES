<h3>
    Programa que recibe una frase con palabras separadas por comas "," y nos escribe
    las palabras por separado. Puede ser &uacute;til la funci&oacute;n explode.
</h3>
<?php
$frase="Hola,&#44;,quiero,decirte,algo,&#44;,pero,temo,que,me,tomes,por,loco"; //&#44; Es la entidad html de la coma, la uso porque si pongo ,,, NO coge la coma del medio...
$cancion=  explode(",", $frase);
echo "<p>";
foreach ($cancion as $valor){
    echo "$valor ";
}
echo "...</p>";
?>