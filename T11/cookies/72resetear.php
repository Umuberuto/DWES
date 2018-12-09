<?php ob_start();?>
<?php 
    /*Destruye el contador de accesos y permite volver a la página 7.php para
    volver a empezar.*/
?>
<h1>
    Las COOKIES han sido eliminadas.
</h1>
<h2><a href="./7.php">Volver</a></h2>
<?php
    setcookie('num_acceso',0, time()-1, "/");
    ob_end_flush();
?>