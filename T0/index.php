<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Curso DWES T0</title>
    </head>
    <body>
        <h1>Tema 0: Introducci&oacute;n (Tarea inicial)</h1>
        <?php
            $manejadorFichero1 = fopen ("TareaInicial.txt","r");
            fpassthru ($manejadorFichero1);
            fclose ($manejadorFichero1);
        ?>
        <h1><a href="../index.php">Volver al &Iacute;NDICE de temas</a></h1>
    </body>
</html>