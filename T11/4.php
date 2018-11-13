<?php ob_start();?>
<h2>
    Realizar un script que cree una cookie llamada fecha que tenga como valor la
    fecha del sistema ( usar date("d/m/Y | H:i:s") ) y que dure un d&iacute;a.
    Desde ese script llamar a otro script en el que si existe la cookie nos muestre
    la fecha de la &uacute;ltima entrada a la p&aacute;gina:
</h2>
<?php
    setcookie("fecha",date("d/m/Y | H:i:s"),60*60*24);
    include '42.php';
    ob_end_flush();
?>