<?php
    /*(Parte 2 de 4.php) Si existe la cookie nos muestra la fecha de la última
    entrada a la página.
    Añadido mío: Si no existe la cookie la crea tras decir que es la primera vez
    que se accede a la página. */
    if (isset($_COOKIE['fecha'])){
        echo "&Uacute;ltima entrada a la p&aacute;gina: {$_COOKIE['fecha']}.<br>";
    } else {
        setcookie("fecha",date("d/m/Y | H:i:s"),time()+60*60*24);
        echo "Es la primera vez que accede a la p&aacute;gina. <br>";
    }
?>