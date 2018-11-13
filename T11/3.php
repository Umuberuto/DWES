<?php ob_start();?>
<h2>
    Realizar un script que cree una cookie llamada TestCookie que tenga como valor
    datos de usuario y que expire dentro de 15 minutos. Desde ese script llamar a
    otro script que compruebe el valor almacenado en la cookie de dos formas distintas
    con la variable $_COOKIE y con la funci&oacute;n print_r aplicada a la variable
    $_COOKIE:
</h2>
<?php
    setcookie("TestCookie","Datos de usuario",time()+60*15);
    include '32.php';
    ob_end_flush();
?>