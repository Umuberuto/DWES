<?php ob_start();?>
<h4>
    Realizar un script que cree una cookie llamada COOKIE2, con el valor 1 que
    expire dentro de 5 minutos pero antes de hacerlo comprobaremos si la cookie
    que queremos crear existe usando la funci&oacute;n isset y la variable global $_COOKIE.
    Si ya existe sacaremos un mensaje indic&aacute;ndolo y si no la crearemos sacando
    un mensaje de que la hemos creado. En la misma p&aacute;gina &iquest;c&oacute;mo podemos
    volver a comprobar que una vez creada existe?
</h4>
<?php
    if (isset($_COOKIE['COOKIE2'])){
        echo '<p>La cookie COOKIE2 ya existe.</p>';
    } else {
        if (setcookie("COOKIE2",1,time()+300, "/")){
            echo '<p>La cookie COOKIE2 se ha creado con &eacute;xito.</p>';
        }
    }
    echo '<p><b>RESPUESTA:</b>Para volver a comprobar que una vez creada una cookie existe '
    . 'en una misma p&aacute;gina basta con refrescar la p&aacute;gina en el navegador o'
    . ' acceder a $_COOKIE["nombre_cookie"]<p>';
    ob_end_flush();
?>