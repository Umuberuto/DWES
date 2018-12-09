<h3>
    Realiza un programa en el que obtengas el timestamp actual del servidor luego
    lo conviertas en una cadena usando date y muestre con echo la marca de tiempo
    y el contenido de la cadena.
</h3>
<?php
    $timeservidor=  time();
    $cadenafecha= date("l dS \of F Y h:i:s A");
    echo "<p>Marca Unix: $timeservidor</p>";
    echo "<p>Fecha en ingl&eacute;s: $cadenafecha</p>";
?>