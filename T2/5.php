<?php
echo "<h2>Investiga el uso de la funci&oacute;n var_dump() de php y demuestra su utilizaci&oacute;n con un ejemplo. Lo mismo para la funci&oacute;n phpinfo().</h2>";
?>
<p>La funci&oacute;n var_dump() muestra informaci&oacute;n sobre una variable. Ej:</p>
<?php
$prueba=array(4, true, null, "3","string", array(4,6));
echo "<p>var_dump sobre la variable \$prueba muestra: </p>";
var_dump($prueba);
echo '<br> <p>Normalmente se utiliza para debuggear.</p>';
?>
<p>phpinfo() sirve para ver los datos de nuestro m&oacute;dulo encargado de interpretar el c&oacute;digo PHP. Para mostar su uso descomentar la siguiente l&iacute;nea de c&oacute;digo.</p>
<?php //phpinfo(); ?>