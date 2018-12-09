<?php
    /*Este fichero debe declarar la variable $num= 20 e incluir los ficheros
     * factorial.inc y divisores.inc*/ 
    $num = 20;
    echo "<hr>";
    echo "<p>Incluyo el fichero que calcula el factorial: </p>";
    include 'factorial.inc';
    echo "<hr>";
    echo "<p>Ahora incluyo el fichero que saca los divisores primos: </p>";
    include 'divisores.inc';
    echo "<hr>";
?>