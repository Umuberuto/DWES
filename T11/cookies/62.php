<?php
    /*(Parte 2 de 6.php)Recoge esos datos en unas variables y los usa para crear
    una serie de cookies con caducidad de 1 hora y que va a meter en un array :
    Después nos dará un mensaje de que se han creado las cookies y llamará a otra
    página que nos las enseñará.
    Añadido mío: Si no están todos los datos del formulario nos redirige al formulario
    5 segundos después de avisarnos. */
    ob_start();
    if( //INICIO de if
            ( isset($_POST['nombre']) && !empty($_POST['nombre']) ) &&
            ( isset($_POST['tel']) && !empty($_POST['tel']) ) &&
            ( isset($_POST['edad']) && !empty($_POST['edad']) ) ) { //FIN de if
                $nombre=$_POST['nombre'];
                $tel=$_POST['tel'];
                $edad=$_POST['edad'];
                if(setcookie("datos[nombre]",$nombre,time()+3600, "/")){
                    if(setcookie("datos[tel]",$tel,time()+3600, "/")){
                        if(setcookie("datos[edad]",$edad,time()+3600, "/")){
                            header("Refresh: 5; url=63.php"); /*NOTA: Si aquí NO
                            redirigiese con Refresh y usase un include al incluir
                            el codigo de 63.php me REDIRECCIONARIA a 6.php porque
                            las cookies solo tienen efecto cuando refrescas o
                            reinicias el navegador...*/
                            echo "<p>Cookies creadas. En 5 segundos ser&aacute;
                                redirigido para ver las cookies con su valor.</p>";
                        }
                    }
                }
    } else {
        header("Refresh: 5; url='./6.php'");
        echo "<p>Faltan datos: Va a ser redirigido al formulario para que pueda
            cumplimentarlos en 5 segundos.</p>";
    }
    ob_end_flush();
?>