<?php
    ob_start();
    session_start();
    unset($_SESSION['contador']);
    $_SESSION['nombre']="SESION_CONTADOR"; /*Esta es por si se accede a 
    ./sesion_3_reset.php sin haber pasado por ./sesion_3.php para evitar el
    undefined index... de $_SESSION['nombre']*/
?>

<h1>Trabajando con Sesiones</h1>
<p>La variable <b>\$_SESSION['contador']</b> ha sido borrada.</p>
<p>El ID de la sesi&oacute;n era: <b><?php echo session_id();?></b>.</p>
<p>El nombre de la sesi&oacute;n era: <b><?php echo $_SESSION['nombre'];?></b>.</p>
<a href='./sesion_3.php'>Volver al ejercicio 3</a>
<br>
<a href="../index.php#ej3">VOLVER AL &Iacute;NDICE</a>

<?php
    unset($_SESSION);
    setcookie(session_name(), "", time()-3600, "/");
    session_destroy();
    ob_end_flush();
?>