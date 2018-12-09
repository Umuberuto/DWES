<?php
    ob_start();
    session_start();
?>

<h1>Manejo de sesiones</h1>
<h2>Paso 3: Vemos que la variable ya ha sido destruida y su valor se ha perdido.</h2>
<p>El valor de la variable de sesi&oacute;n es: <?php echo "{$_SESSION['nombre']}";?></p>
<p>Ahora destruimos la sesi&oacute;n ENTERA:</p>

<?php
    //Para borrar la sesión:
    //1:Hay que borrar todas las variables de sesión.
    /* Se puede usar:
     * $_SESSION=array();
       o
     * unset($_SESSION);
     Pienso que es mejor usar unset($_SESSION) porque si haces var_dump ($_SESSION)
     DESPUÉS de hacer el unset($_SESSION) te sale la notificación de
     undefined index... y null. Mientras que si haces el var_dump ($_SESSION)
     DESPUÉS de $_SESSION=array(); te muestra que has sustituido el array $_SESSION
     ENTERO por un array de 0 posiciones (es decir, vacío) pero NO parece que se
     libere la memoria usada...
    */
    unset($_SESSION); /*También podría haber usado un bucle para hacer unset sobre
    las variables de 1 en 1... Pero sería malgastar recursos.*/
    //2:Hay que eliminar la cookie de sesión.
    setcookie(session_name(),"",time()-3600,"/");
    /*IMPORTANTE:setcookie(session_name(),"",time()-3600); (Es decir, sin especificar
     "/" en ruta NO borra la cookie de sesión.*/
    //3:Hay que destruir la sesión.
    session_destroy();
?>

<a href="./sesion_2.php">Volver al paso 1</a>
<br>
<a href="../index.php#ej2">VOLVER AL &Iacute;NDICE</a>

<?php ob_end_flush();?>