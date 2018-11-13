<?php
    /*(Parte 2 de 3.php) Comprueba el valor almacenado en la cookie de dos formas
    distintas con la variable $_COOKIE y con la función print_r aplicada a la
    variable $_COOKIE.
    Añadido mío: Si no existe la cookie te manda al 3.php para que la cree. */
    if(isset($_COOKIE['TestCookie'])){
        echo "Con echo: ".$_COOKIE['TestCookie']."<br>";
        echo "Con print_r: ";
        print_r($_COOKIE['TestCookie']."<br>");
    } else {
        header("Location:3.php");
    }
?>