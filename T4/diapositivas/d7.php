<h2>Probad lo que muestra este ejemplo:</h2>
<?php
    $array = array( 1 => "a", "1" => "b", 1.5 => "c", true => "d",);
    var_dump($array);
?>
<p>Dado que al transformar el "1" a int, al cortar el 1.5 y al transformar el true a int da 1, cada elemento sustituye al anterior por ocupar la misma posici&oacute;n. Por eso la posici&oacute;n 1 termina con el valor del &uacute;ltimo elemento (en este caso "d").</p>