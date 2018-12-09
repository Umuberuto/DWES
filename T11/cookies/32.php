<?php
    /*(Parte 2 de 3.php) Comprueba el valor almacenado en la cookie de dos formas
    distintas con la variable $_COOKIE y con la función print_r aplicada a la
    variable $_COOKIE.
    Añadido mío: Si ejecutamos el ./32.php directamente y no existe la cookie te
    manda al 3.php para que la cree. */
    
        if(isset($_COOKIE['TestCookie'])){
            echo "<p>Con echo: ".$_COOKIE['TestCookie'].".</p>";
            echo "<p>Con print_r: ";
            print_r($_COOKIE['TestCookie'].".</p>");
        } else {
            if( $_SERVER['REQUEST_URI']=="/DWES/T11/cookies/32.php" ){
                header("Location:3.php");
            } 
        }
?>