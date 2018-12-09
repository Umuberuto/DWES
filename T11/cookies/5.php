<?php ob_start();?>
<h4>
    Realizar un script que cree una serie de cookies:<br>
    &nbsp;&nbsp;&nbsp;&nbsp;fecha con el valor del campo date y que expire en 1 hora<br>
    &nbsp;&nbsp;&nbsp;&nbsp;idioma_preferente con valor espa&ntilde;ol<br>
    &nbsp;&nbsp;&nbsp;&nbsp;fondo_por_defecto con valor rojo <br>
    Despu&eacute;s en ese script llamar a otra p&aacute;gina que nos muestre en una tabla
    los nombres de las cookies activas y su valor y en el caso de que no existan en la tabla
    saldr&aacute; un mensaje diciendo que no hay cookies activas:
</h4>
<?php
    setcookie("fecha",  date("d/m/Y | H:i:s"), time()+3600, "/");
    setcookie("idioma_preferente", "espa&ntilde;ol", time()+3600, "/");
    setcookie("fondo_por_defecto", "rojo", time()+3600, "/");
    include '52.php';
    ob_end_flush();
?>