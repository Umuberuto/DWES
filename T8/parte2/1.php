<h4>
    Realizar un ejemplo completo formularioCompleto.html que sea similar a este
    (Meter los controles en una tabla para mostrarlo): 
</h4>
<h5>
    -El m&eacute;todo de env&iacute;o puede ser $_GET o $_POST.
</h5>
<h5>
    -La p&aacute;gina a la que enviamos se llamara variablesFormulario1.php y en
    ella se mostrar&aacute;n uno a uno el contenido de las variables pasadas. Usar
    una tabla para mostrar los nombres de las variables y sus valores.
</h5>
<h5>
    -Probar la ejecuci&oacute;n de dos formas distintas: pasando todos los valores
    y solo algunos para ver qu&eacute; ocurre.
</h5>
<?php
    if($_SERVER['REQUEST_URI']=='/DWES/T8/parte2/1.php'){
        include 'formularioCompleto.html';
    }
    else
        include 'parte2/formularioCompletoinclude.html';
?>