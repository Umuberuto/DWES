<?php ob_start();?>
<h4>
    Realizar un script que cree una cookie llamada fecha que tenga como valor la
    fecha del sistema ( usar date("d/m/Y | H:i:s") ) y que dure un d&iacute;a.
    Desde ese script llamar a otro script en el que si existe la cookie nos muestre
    la fecha de la &uacute;ltima entrada a la p&aacute;gina:
</h4>
<?php
    setcookie("fecha",date("d/m/Y | H:i:s"),time()+60*60*24,"/");
    //Mirar notas ejs:./1.php y ./3.php
    if ($_SERVER['REQUEST_URI']=="/DWES/T11/cookies/4.php"){
        include './42.php';
    } else {
        include './cookies/42.php';
    }
    ob_end_flush();
?>