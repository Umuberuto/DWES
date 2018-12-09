<h4>
    Hacer otra versi&oacute;n de la p&aacute;gina que se llame variablesFormulario3.php
    que muestre el contenido usando un foreach pero haciendo uso de las funciones empty()
    y is_array(): 
</h4>
<?php
    if($_SERVER['REQUEST_URI']=='/DWES/T8/parte2/4.php'){
        include 'formularioCompleto4.html';
    }
    else
        include 'parte2/formularioCompletoinclude4.html';
?>