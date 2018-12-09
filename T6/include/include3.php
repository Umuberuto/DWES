<?php
    /*Este fichero debe llamar dentro de un bucle for ( ; ; ) a factorial.inc
    (para los valores 10 y 30) y a divisores.inc (para los valores 20 y 40)*/
    
    $jj=10;
    for ( ; ; ){ /*El $i-- es necesario porque $i termina valiendo 31 (Por error
    de utilizar el mismo nombre $i en los script incluidos)*/
        if($jj>30)
            break;
        else{
            echo "<hr>";
            echo "<p>Incluyo el fichero que calcula el factorial: </p>";
            $num=$jj;
            include 'factorial.inc';
            $num+=10;
            echo "<hr>";
            echo "<p>Ahora incluyo el fichero que saca los divisores primos: </p>";
            include 'divisores.inc';
            $jj+=20;
            echo "<hr>";
        }
    }
?>