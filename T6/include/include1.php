<?php @include_once '../../bibliotecademisfunciones/funcionesNumeros.php'; //Como este archivo SÍ se puede ejecutar y va a incluir a otros archivos (factorial.inc y divisores.inc) que necesitan la inclusión de un archivo para funcionar (funcionesNumeros.php) debo incluir esta ruta para asegurar el correcto funcionamiento... ?>
<?php
    //Este fichero debe declarar la variable $num= 20 e incluir los ficheros factorial.inc y divisores.inc 
    $num = 20;
    echo "Incluyo el fichero que calcula el factorial: <br>";
    include 'factorial.inc';
    echo '<br>';
    echo "Ahora incluyo el fichero que saca los divisores primos: <br>";
    include 'divisores.inc';
?>