<?php
    echo "<h3>Crea un fichero en php de tal forma que a partir de dos variables
        definidas que tendr&aacute;s que mostrar el resultado de realizar las
        operaciones de suma, resta, multiplicaci&oacute;n y divisi&oacute;n entre
        ellas. Utiliza operadores variados.</h3>";

    //Declaramos variables:
    $num1=5; $num2=4;
    
    //Mostramos el resultado de hacer distintas operaciones
    echo "<h4>Suma error:</h4>";
    
    /*Explicación del "error":
    $p="$num1 + $num2= ".$num1; Hasta ahí considera a $p un string (5 + 4= 5). Sin
    embargo si quitamos el ; y añadimos +$num2; TRANSFORMA el string en int (5) con
    el casting implícito (El casting automatico (implícito) del string (5 + 4= 5) da 5)
    para intentar sumar el $num2 (4)... Al añadir ."." transforma el int 9 en string 9.
    Para llegar a esta conclusión he necesitado meter en una variable $p (de prueba)
    la expresión que no daba lo que yo quería con el echo... Pensaba que era fallo del
    echo pero resulta que NO, que era culpa del casting implícito... Todos los errores
    son una forma distinta del mismo error. Se puede solucionar de distintas formas.
    Mirar las soluciones en suma y resta solucionadas...
    echo "$num1 + $num2= ".$num1+$num2.".";Da 9. por lo que acabo de decir.
    
    Sin embargo:
    $p= (int)("<p>$num1 + $num2= ".$num1);//Da 0
    $p+=$num2.".</p>";//Da 4.0(float)
     
    CONCLUSIÓN:
    Por CULPA de los CASTING IMPLÍCITOS se puede liar una interesante, ya que al añadir
    distintas cosas cambia la manera de funcionar.
        -> echo "$num1 + $num2= ".$num1+$num2."."; //Da 9.
        -> echo "<p>$num1 + $num2= ".$num1+$num2.".</p>"; //Da 4.
     */
    
    echo "$num1 + $num2= ".$num1+$num2.".";
    echo "<br>";
    echo "<p>$num1 + $num2= ".$num1+$num2.".</p>";
    echo "<h4>Resta error:</h4>";
    echo "<p>$num1 - $num2= ".$num1-$num2.".</p>";
    /*El echo realiza la operación de suma y resta por algún extraño motivo -->El error
    explicado arriba en el comentario desde la línea 12 a la 22.*/
    
    //Preguntar por qué no funciona las siguientes instrucciones
    //Vale ya lo he entendido... Explicado en líneas 12 a 22.
    echo "<h4>Suma error 2:</h4>";
    echo "<p>$num1 \+ $num2= ".$num1+$num2.".</p>";
    echo "<h4>Resta error 2:</h4>";
    echo "<p>$num1 \- $num2= ".$num1-$num2.".</p>";
    
    echo "<h4>Suma error 3:</h4>";
    echo "<p>$num1 + $num2 = ".$num1+$num2.".</p>";
    echo "<h4>Resta error 3:</h4>";
    echo "<p>$num1 - $num2 = ".$num1-$num2.".</p>";
    
    /*Imagino que es por la precedencia de operadores. -->NO exactamente pero gracias
    a la precedencia de operadores se arregla el fallo por suerte (Ha sido casualidad
    que llegase a la solución pero ahora ya lo he entendido...)
     */
    echo "<h4>Suma solucionada:</h4>";
    echo "<p>$num1"." + "."$num2 = ".($num1+$num2).".</p>";
    echo "<h4>Suma solucionada de otra forma:</h4>";
    echo "<p>$num1 + $num2= ",$num1+$num2,".</p>";
    echo "<h4>Resta solucionada:</h4>";
    echo "<p>$num1"." - "."$num2 = ".($num1-$num2).".</p>";
    echo "<h4>Resta solucionada de otra forma:</h4>";
    echo "<p>$num1 - $num2= ",$num1-$num2,".</p>";
    echo "<h4>Multiplicaci&oacute;n:</h4>";
    echo "<p>$num1 * $num2= ".$num1*$num2.".</p>";
    echo "<h4>Divisi&oacute;n:</h4>";
    if ($num2!=0)
        echo "<p>$num1 / $num2= ".$num1/$num2.".</p>";
    else 
        echo "<p>No se puede dividir entre 0.</p>";
?>