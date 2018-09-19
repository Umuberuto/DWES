<?php
echo "<h2>Crea un fichero en php de tal forma que a partir de dos variables definidas que tendr&aacute;s que mostrar el resultado de realizar las operaciones de suma, resta, multiplicaci&oacute;n y divisi&oacute;n entre ellas. Utiliza operadores variados.</h2>";
    //Declaramos variables:
    $num1=5; $num2=4;
    
    //Mostramos el resultado de hacer distintas operaciones
    echo "<h3>Suma error:</h3>";
    echo "$num1 + $num2= ".$num1+$num2.".";
    echo "<h3>Resta error:</h3>";
    echo "$num1 - $num2= ".$num1-$num2.".";
    //El echo realiza la operación de suma y resta por algún extraño motivo
    
    //Preguntar por qué no funciona las siguientes instrucciones
    echo "<h3>Suma error 2:</h3>";
    echo "$num1 \+ $num2= ".$num1+$num2.".";
    echo "<h3>Resta error 2:</h3>";
    echo "$num1 \- $num2= ".$num1-$num2.".";
    
    echo "<h3>Suma error 3:</h3>";
    echo "$num1 + $num2 = ".$num1+$num2.".";
    echo "<h3>Resta error 3:</h3>";
    echo "$num1 - $num2 = ".$num1-$num2.".";
    
    //Imagino que es por la precedencia de operadores
    echo "<h3>Suma solucionada:</h3>";
    echo "$num1"." + "."$num2 = ".($num1+$num2).".";
    echo "<h3>Resta solucionada:</h3>";
    echo "$num1"." - "."$num2 = ".($num1-$num2).".";
    echo "<h3>Multiplicaci&oacute;n:</h3>";
    echo "$num1 * $num2= ".$num1*$num2.".";
    echo "<h3>Divisi&oacute;n:</h3>";
    if ($num2!=0)
        echo "$num1 / $num2= ".$num1/$num2.".";
    else 
        echo "No se puede dividir entre 0.";
?>