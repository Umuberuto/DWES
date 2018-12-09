<h4>
    <p>
        Crear una p&aacute;gina sesion_3 que utilice una variable de sesi&oacute;n
        para contabilizar el n&uacute;mero de accesos a la p&aacute;gina de tal
        forma que cuando la ejecutemos salga algo parecido al cuadro de la izquierda
        con una determinada informaci&oacute;n que muestra en formato de tabla y dos
        opciones en la parte baja:
    </p>
    <ul>
        <li>
            <p>
                <b>Actualizar</b> que hace que se salga la misma informaci&oacute;n
                pero actualiz&aacute;ndose el dato N&uacute;mero de accesos.
            </p>
        </li>
        <li>
            <p>
                <b>Resetear</b> nos mostrar&aacute; el cuadro de la derecha donde se
                ha borrado la variable que contiene el n&uacute;mero de accesos y
                adem&aacute;s nos muestra el ID de la sesi&oacute;n y el nombre y
                adem&aacute;s nos permite volver a empezar de nuevo.
            </p>
        </li>
    </ul>
</h4>
<?php
    if ($_SERVER['REQUEST_URI']=="/DWES/T11/sesiones/3.php"){
        echo '<img src="../img/31.jpg">';
        echo "<br>";
        echo "<br>";
        echo '<img src="../img/32.jpg">';
        echo "<br>";
        echo "<br>";
        echo '<img src="../img/33.jpg">';
        echo "<br>";
        echo "<br>";
        echo "<h5><a href='./sesion_3.php'>ENLACE A SESION_3.PHP</a></h5>";
    } else {
        echo '<img src="./img/31.jpg">';
        echo "<br>";
        echo "<br>";
        echo '<img src="./img/32.jpg">';
        echo "<br>";
        echo "<br>";
        echo '<img src="./img/33.jpg">';
        echo "<br>";
        echo "<br>";
        echo "<h5><a href='./sesiones/sesion_3.php'>ENLACE A SESION_3.PHP</a></h5>";
    }
?>