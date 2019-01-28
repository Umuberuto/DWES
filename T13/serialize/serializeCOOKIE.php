<?php ob_start();?>
<?php include 'Magico.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="Nicolás Umberto Sánchez Avilés">
        <title>Serializaci&oacute;n</title>
    </head>
    <body>
<?php
    if (isset($_COOKIE["objeto"])){
        $magico=  unserialize($_COOKIE["objeto"]);
        echo "<h1 style='color:green;'>Activar el m&eacute;todo animalPatronus() de mi objeto:</h1>";
        $magico->animalPatronus();
        echo "<h1 style='color:red;'>IMPORTANTE: NO se debe unserializar de cookies. Yo lo he hecho para demostrar que se puede pero es peligroso.</h1>";
    } else {
        $magico=new Magico;
        $magico=  serialize($magico);
        setcookie("objeto", $magico,time()+3600);
        echo "<h1 style='color:green;'>Refresque la p&aacute;gina para activar la COOKIE:</h1>";
    }
?>
    </body>
</html>
<?php ob_end_flush();?>