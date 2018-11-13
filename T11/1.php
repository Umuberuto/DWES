<?php ob_start(); //Empiezo el flujo por si llamo a esta página y NO al index (Este flujo es interno al flujo del ./index.php ?>
<h2>
    Realizar un script que cree una cookie llamada COOKIE1, con el valor 424, que
    expire dentro de 3 minutos y usar la variable superglobal S_SERVER['REQUEST_URI']
    para darle el path actual.<br> 
    Nota: REQUEST_URI contiene la URI que se emple&oacute; para acceder a la p&aacute;gina.
    Por ejemplo: '/index.html'.
</h2>

<?php
    if(isset($_COOKIE['COOKIE1']))
        echo 'La cookie COOKIE1 YA existe.<br>';
    else{
        if(setcookie("COOKIE1", 424, time()+180, $_SERVER['REQUEST_URI'])) //NOTA INTERESANTE: Como le he puesto en el path el $_SERVER['REQUEST_URI'] Si le llamo desde este archivo (./1.php) creo una cookie con distinto path a si le llamo desde (./index.php). Por lo tanto puedo tener 2 COOKIE1 (se llaman igual pero son distintas por el path) sin que se sobreescriban.
            echo "Cookie creada con &eacute;xito.<br>";
    }
    ob_end_flush();
?>