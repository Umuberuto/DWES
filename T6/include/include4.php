<?php 
    @include_once '../../bibliotecademisfunciones/funcionesNumeros.php';
    /*Como este archivo SÍ se puede ejecutar y va a incluir a otros archivos
    (factorial.inc y divisores.inc) que necesitan la inclusión de un archivo para
    funcionar (funcionesNumeros.php) debo incluir esta ruta para asegurar el
    correcto funcionamiento... */
?>

<h4>Inclusi&oacute;n de ficheros y uso de return: </h4>

<?php
    /*Este programa muestra si el número 7 y el 22 son primos invocando a una
     * función es_primo().*/
    $texto="<p>";
    if (es_primo(7))
        $texto.="7 es primo </p>";
    else {
        $texto.="7 no es primo </p>";
    }
    if (es_primo(22))
        $texto.="<p>22 es primo </p>";
    else {
        $texto.="<p>22 no es primo </p>";
    }
    echo $texto;
?>