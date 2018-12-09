<?php
    /*(Parte 2 de 4.php) Si existe la cookie nos muestra la fecha de la última
    entrada a la página.
    Añadido mío: Si no existe la cookie la crea tras decir que es la primera vez
    que se accede a la página. */
    ob_start();
    if (isset($_COOKIE['fecha'])){
        echo "<p>&Uacute;ltima entrada a la p&aacute;gina: {$_COOKIE['fecha']}.</p>";
    } else {
        echo "<p>Es la primera vez que accede a la p&aacute;gina. </p>";
    }
    
    if ($_SERVER['REQUEST_URI']=="/DWES/T11/cookies/42.php"){ /*Sin esta línea, si
    se llamase directamente a ./42.php, la cookie NO se actualizaría...*/
           setcookie("fecha",date("d/m/Y | H:i:s"),time()+60*60*24,"/");
    }
    ob_end_flush();
?>