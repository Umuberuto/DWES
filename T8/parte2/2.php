<h4>
    Hacer otra versi&oacute;n de la p&aacute;gina que se llame variablesFormulario2.php
    (pero ahora usando la funci&oacute;n isset para cada uno de los controles controlando
    si se han enviado o no para mostrarlos):
</h4>
<?php
    if($_SERVER['REQUEST_URI']=='/DWES/T8/parte2/2.php'){
        include 'formularioCompleto2.html';
    }
    else
        include 'parte2/formularioCompletoinclude2.html';
?>