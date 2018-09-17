<?php
    echo '<h2>Investiga el uso de la función gettype() de php y demuestra su utilización con un ejemplo en el que nos indique el tipo de la variable por pantalla.</h2>';
?>
<p>La función gettype() muestra el tipo de una variable. Ej:</p>
<?php
    $prueba=array(4, true, null, "3","string", array(4,6));
    echo "<p>gettype() sobre la variable \$prueba no muestra nada porque la función no acepta arrays: ";
    gettype($prueba);
    echo "</p>";
    echo "<p>Pero si recorremos el array muestra: <br>";
    foreach ($prueba as $valor) {
        echo gettype($valor), "<br>";
        if (gettype($valor)=="array")
                echo "No entiendo por qu&eacute; el array anterior S&Iacute; funciona pero el gettype(\$prueba); de la l&iacute;nea 8 no.<br>";
    }
    echo "</p>";
?>