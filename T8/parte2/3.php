<h4>
    Hacer una nueva versi&oacute;n de la p&aacute;gina que se llame variablesFormulario2B.php
    que muestre lo mismo pero usando un foreach:
</h4>
<?php
    if($_SERVER['REQUEST_URI']=='/DWES/T8/parte2/3.php'){
        include 'formularioCompleto3.html';
    }
    else
        include 'parte2/formularioCompletoinclude3.html';
?>