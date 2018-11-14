<?php ob_start(); ?>
<h2>
    Realizar un script que use una cookie num_acceso para contabilizar el n&uacute;mero
    de accesos a una p&aacute;gina. La primera vez nos mostrar&aacute; una pantalla
    como la siguiente: <br>
    Si damos a Actualizar me ir&aacute; mostrando de forma sucesiva si he accedido dos,
    tres, cuatro... Veces a la p&aacute;gina mientras que si damos a Eliminar llamar&aacute;
    a otra p&aacute;gina en la que destruir&aacute; el contador de accesos y me permitir&aacute;
    volver a la p&aacute;gina de partida y volver a empezar:
</h2>
<h3>Trabajando con cookies</h3>
<h4>Contador de accesos:</h4>
<?php
    if(isset($_COOKIE['num_acceso'])){
        echo "Ha accedido a la p&aacute;gina {$_COOKIE['num_acceso']} veces.<br>";
        setcookie('num_acceso',++$_COOKIE['num_acceso'],  time()+3600);
    } else {
        echo "Es la primera vez que accedes a la p&aacute;gina. <br>";
        setcookie('num_acceso',2,time()+3600);
    }
    echo "<a href='./72actualizar.php'>Actualizar</a> | ";
    echo "<a href='./72resetear.php'>Eliminar</a>";
    ob_end_flush();
?>