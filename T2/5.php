<?php
echo "<h2>Investiga el uso de la función var_dump() de php y demuestra su utilización con un ejemplo. Lo mismo para la función phpinfo().</h2>";
?>
<p>La función var_dump() muestra información sobre una variable. Ej:</p>
<?php
$prueba=array(4, true, null, "3","string", array(4,6));
echo "<p>var_dump sobre la variable \$prueba muestra: </p>";
var_dump($prueba);
echo '<br> <p>Normalmente se utiliza para debuggear.</p>';
?>
<p>phpinfo() sirve para ver los datos de nuestro módulo encargado de interpretar el código PHP. Para mostar su uso descomentar la siguiente línea de código.</p>
<?php //phpinfo(); ?>