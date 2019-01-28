<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="Nicolás Umberto Sánchez Avilés">
        <title>Serializaci&oacute;n</title>
    </head>
    <body>
<?php
    echo "<h1>Array tal y como se crea: </h1>";
    $miarray=array(1,true, "Paco");
    var_dump($miarray);
    echo "<h1>Array serializado: </h1>";
    $miarrayser=  serialize($miarray);
    var_dump($miarrayser);
    echo "<h1>Array deserializado: </h1>";
    $miarraydeser=  unserialize($miarrayser);
    var_dump($miarraydeser);
?>
    </body>
</html>