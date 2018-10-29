<h3>
    Realizar el ejercicio anterior pero todo en un mismo programa calculadora2.php
    que se llama a s&iacute; mismo y se env&iacute;a datos de su formulario:
</h3>
<?php
    if($_SERVER['REQUEST_URI']=='/DWES/T8/parte1/3.php'){ //IMPORTANTE: SIEMPRE que quiera comparar rutas con formato Windows (con \ Ej:C:\padre\hijo...) usar '' NO "" porque "" escapa los caracteres (Ej \n = salto de línea) y no funciona.
        include 'calculadora2.php';
    }
    else{
        include './parte1/calculadora2include.php';
    }
?>