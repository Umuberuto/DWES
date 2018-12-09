<?php
    ob_start();
    session_start();
?>

<h1>Manejo de sesiones</h1>
<h2>Paso 2: Accedemos a la variable de sesi&oacute;n almacenada, la mostramos y se destruye.</h2>
<p>El valor de la variable de sesi&oacute;n es: <?php echo "{$_SESSION['nombre']}";?>.</p>
<p>Ahora la destruimos.</p>

<?php unset($_SESSION['nombre']); ?>

<a href="./sesion_2b.php">Ir al paso 3</a>

<?php ob_end_flush();?>