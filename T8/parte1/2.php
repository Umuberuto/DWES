<h4>
    Realizar un programa en HTML calculadora.html que muestre un formulario que
    simule el funcionamiento de una calculadora. El programa me mostrar&aacute;
    dos controles para introducir dos n&uacute;meros y me permitir&aacute; realizar
    con ellos una de las operaciones de sumar restar, multiplicar y dividir. El
    formulario usar&aacute; el m&eacute;todo POST y el fichero que figura en action
    se llamar&aacute; calculadora.php:
</h4>
<?php
    /*IMPORTANTE:$_SERVER['REQUEST_URI'] es una cadena que contiene la url "inicial"
    de los include. Va a ser modificada si se usa <a> (esta ruta, la de a, será el
    nuevo valor de $_SERVER['REQUEST_URI'])*/

    /*IMPORTANTE:He creado dos archivos aquí porque en un archivo con extensión
    .html NO puedo usar php y necesitaba que el formulario redirigiese a una ruta
    u otra según quien lo llame (Ya sea el mismo u otro fichero)*/
    
    if($_SERVER['REQUEST_URI']=='/DWES/T8/parte1/2.php'){ /*IMPORTANTE: SIEMPRE
    que quiera comparar rutas con formato Windows (con \ Ej:C:\padre\hijo...) usar
    '' NO "" porque "" escapa los caracteres (Ej \n = salto de línea) y no funciona.*/
        include 'calculadora.html';
    }
    else
        include 'parte1/calculadorainclude.html';
?>