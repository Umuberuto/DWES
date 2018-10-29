<h3>
    Realizar un formulario como el siguiente en un fichero que se llame canciones.html.
    Cuando pulsemos en el bot&oacute;n Buscar nos llevara a la p&aacute;gina
    canciones_resultado.php en la que se mostrar&aacute; lo que el usuario ha introducido
    o seleccionado en el formulario y un bot&oacute;n que nos permita volver a la
    p&aacute;gina de b&uacute;squeda (canciones.html):
</h3>
<?php
    if($_SERVER['REQUEST_URI']=='/DWES/T8/parte1/5.php'){ 
        include 'canciones.html';
    }
    else
        include 'parte1/cancionesinclude.html';
?>