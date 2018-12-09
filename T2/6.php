<?php
    echo '<h3>Investiga el uso de la funci&oacute;n gettype() de php y demuestra
        su utilizaci&oacute;n con un ejemplo en el que nos indique el tipo de la
        variable por pantalla.</h3>';
?>
<p>La funci&oacute;n gettype() muestra el tipo de una variable. Ej:</p>
<?php
    $prueba=array(4, true, null, "3","string", array(4,6));
    echo "<p>".gettype($prueba)."</p>"; /*NOTA: Pensaba que gettype sobre un array
    NO funcionaba y resulta que SÍ funcionaba pero había olvidado el echo.*/
    echo "<p>gettype() recorriendo el array muestra: <br>";
    foreach ($prueba as $valor) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;",gettype($valor), "<br>";
    }
    echo "</p>";
?>