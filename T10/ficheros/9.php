<h4>
    <p>
        Realizar una peque&ntilde;a aplicaci&oacute;n para recoger los comentarios
        de los usuarios sobre su p&aacute;gina web. En una primera p&aacute;gina
        pagina1.php crearemos un formulario que pida el nombre de usuario y un
        comentario:
    </p>
    <?php
        if ($_SERVER['REQUEST_URI']=="/DWES/T10/ficheros/9.php"){
            echo '<img src="../img/91.JPG">';
        } else {
            echo '<img src="./img/91.JPG">';
        }
    ?>    
    <p>
        Cuando pulsemos el bot&oacute;n Enviar se mandar&aacute;n los datos a otra
        p&aacute;gina llamada pagina2.php en la cual se guardar&aacute;n los datos
        en un fichero datos.txt y se muestra un mensaje similar al siguiente:
    </p>
    <?php
        if ($_SERVER['REQUEST_URI']=="/DWES/T10/ficheros/9.php"){
            echo '<img src="../img/92.JPG">';
        } else {
            echo '<img src="./img/92.JPG">';
        }
    ?>
    <p>
        Al pulsar en ese enlace iremos a una p&aacute;gina llamada pagina3.php que
        nos muestra el contenido del fichero.
    </p>
    <p>
        Los datos en el fichero se deben guardar con el siguiente formato en el
        que se separan con una l&iacute;nea de puntos y se pone en una l&iacute;nea
        el usuario y en otra los comentarios:
    </p>
    <?php
        if ($_SERVER['REQUEST_URI']=="/DWES/T10/ficheros/9.php"){
            echo '<img src="../img/93.JPG">';
        } else {
            echo '<img src="./img/93.JPG">';
        }
    ?>
</h4>