<?php
    /*Este fichero debe llamar dentro de un bucle for a factorial.inc (para los
    valores 10 y 30) y a divisores.inc (para los valores 20 y 40)*/
    
    for ($i=10;$i<=30;$i--){ /*El $i-- es necesario porque $i termina valiendo 31
    (Por error de utilizar el mismo nombre $i en los script incluidos)*/
        echo "<hr>";
        echo "<p>Incluyo el fichero que calcula el factorial: </p>";
        $num=$i;
        include 'factorial.inc';
        echo "<hr>";
        $num+=10;
        echo "<p>Ahora incluyo el fichero que saca los divisores primos: </p>";
        include 'divisores.inc';
        echo "<hr>";
        $i+=20;
    }
?>