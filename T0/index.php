<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="Nicolás Umberto Sánchez Avilés">
        <title>Curso DWES T0</title>
    </head>
    <body>
        <h1>TEMA 0: INTRODUCCI&Oacute;N (TAREA INICIAL)</h1>
        <?php
            //Abro y leo el fichero TareaInicial.txt
            $manejadorFichero1 = fopen ("TareaInicial.txt","r");
            fpassthru ($manejadorFichero1);
            fclose ($manejadorFichero1);
        ?>
        <h1><a href="../index.php">VOLVER AL &Iacute;NDICE DE TEMAS</a></h1>
    </body>
</html>