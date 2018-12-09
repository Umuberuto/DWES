<?php
    session_name("DatosUser");
    /*IMPORTANTÍSIMO: Si cambio el nombre, debo cambiarlo en TODOS los archivos
     * (Incluido el archivo en el que destruyo la session) y ANTES de
     * session_start();*/
    session_start();
    $_SESSION['nombre']="Nico";
    $_SESSION['fecha']=time();
?>

<p>Toda sesi&oacute;n tiene un identificador de sesi&oacute;n:</p>

<p>
    <?php
        echo session_name(), " = ", session_id();
    ?>
</p>

<p>
    Para que la sesi&oacute;n funcione puede ser necesario que el navegador del
    cliente acepte cookies.
</p>

<a href="./sesion_62.php">Click aqu&iacute; para cargar otra p&aacute;gina</a><br>

<p>En caso contrario necesitaremos usar el identificador de sesi&oacute;n.</p>

<?php
    echo "<a href='./sesion_62.php?PHPSESSID=";
    echo urlencode(session_id()),"'>"; /*INTERESANTE: Este link NO cambia su color
    al de visitado a no ser que vuelva atrás (es decir, de ./sesion_62.php a
    ./sesion_6.php) con la flecha de <-- del navegador. Imagino que esto se debe
    al parámetro del GET en la URL*/
?>
    Click aqu&iacute; para cargar otra p&aacute;gina pasando el identificador de
    sesi&oacute;n
</a>
<br>

<p>
    Nota: En caso de error con variables de sesi&oacute;n puede ser recomendable
    reiniciar el servidor.
</p>