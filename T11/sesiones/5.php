<h4>
    <p>
        Realizar un script que cree una sesi&oacute;n y dos variables de
        sesi&oacute;n con el modelo de coche y los cc que tiene y despu&eacute;s
        sacar en una tabla informaci&oacute;n de la sesi&oacute;n como las que
        aparecen en la columna de la izquierda de la figura:
    </p>
</h4>
<?php
    if ($_SERVER['REQUEST_URI']=="/DWES/T11/sesiones/5.php"){
        echo '<img src="../img/5.jpg">';
        echo "<br>";
        echo "<br>";
        echo "<h5><a href='./sesion_5.php'>ENLACE A SESION_5.PHP</a></h5>";
    } else {
        echo '<img src="./img/5.jpg">';
        echo "<br>";
        echo "<br>";
        echo "<h5><a href='./sesiones/sesion_5.php'>ENLACE A SESION_5.PHP</a></h5>";
    }
?>