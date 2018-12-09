<?php
    session_name("DatosUser"); /*Si NO lo pongo delante del session_start() NO
    funciona bien, por lo tanto no destruye la session.*/
    session_start();
    unset($_SESSION);
    setcookie(session_name(), "", time()-3600, "/");
    session_destroy();
?>

<h1>Sesi&oacute;n destruida</h1>
<a href="./sesion_6.php">Volver al ejercicio 6</a>
<br>
<a href="../index.php#ej6">VOLVER AL &Iacute;NDICE</a>