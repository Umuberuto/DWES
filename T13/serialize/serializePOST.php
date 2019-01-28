<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="Nicolás Umberto Sánchez Avilés">
        <title>Serializaci&oacute;n</title>
    </head>
    <body>
<?php
    if (!isset($_POST["pelis"])){
        $pelis=array("Star Wars", "Monstruos SA", "Shrek", "Tron");
        $pelis=serialize($pelis);
        echo '<form method="POST" name="pelis">';
        echo '<input type="hidden" name="pelis" value='."'".$pelis."'>";
        echo '<input type="submit" value="Pelis">';
        echo '</form>';
    } else {
        $pelis=  unserialize($_POST["pelis"]);
        echo "<h1 style='color:red;'>Tras serializar por POST \$pelis vuelve a poder ser usado como array:</h1>";
        echo "<h2>Ej: $pelis[1]</h2>";
        //Descomentar para ver como vuelve a ser un array
        //var_dump($pelis);
    }
?>
    </body>
</html>