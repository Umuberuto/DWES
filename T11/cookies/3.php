<?php ob_start();?>
<h4>
    Realizar un script que cree una cookie llamada TestCookie que tenga como valor
    datos de usuario y que expire dentro de 15 minutos. Desde ese script llamar a
    otro script que compruebe el valor almacenado en la cookie de dos formas distintas
    con la variable $_COOKIE y con la funci&oacute;n print_r aplicada a la variable
    $_COOKIE:
</h4>
<?php
    if(!isset($_COOKIE['TestCookie'])){
        if (setcookie("TestCookie","Datos de usuario",time()+60*15,"/")){ /*IMPORTANTE:
        La "/" significa que afecta al dominio ENTERO. Eso me permite evitar lo que
        dije en la nota del setcookie() del ejercicio ./1.php*/
            echo "<p>Cookie TestCookie creada con &eacute;xito.</p>";
        }
    }
    if ($_SERVER['REQUEST_URI']=="/DWES/T11/cookies/3.php"){
        include './32.php';
    } else {
        include './cookies/32.php';
    }
    ob_end_flush();
?>