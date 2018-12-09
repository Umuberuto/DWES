<?php
    ob_start();
    session_start();
    $_SESSION['nombre']="Alberto";
?>

<h1>Manejo de sesiones</h1>
<h2>Paso 1: Creamos una variable de sesi&oacute;n y se almacena.</h2>
<p>Variable de sesi&oacute;n creada con el nombre de <?php echo "{$_SESSION['nombre']}";?>.</p>
<a href="./sesion_2a.php">Ir al paso 2</a>

<?php ob_end_flush();?>