<h4>
    Programa que recibe dos palabras, una en un campo normal y otra en un campo
    tipo contrase&ntilde;a y nos dice si son iguales. Funci&oacute;n strcmp.
</h4>
<?php
    $palabra="Babalunga";
    $pass="Babalunga";
    if (strcmp($pass, $palabra)==0){ //Nota: si da 0 son iguales, si no, son distintas, además son case sensitive.
        echo "<p> Las palabras se corresponden. </p>";
    } else {
        echo "<p> Las palabras NO se corresponden. </p>";
    }
?>