<h4>
    <p>
        Realizar una p&aacute;gina sesion_6.php que cree una sesi&oacute;n con el
        nombre de sesi&oacute;n DatosUser y dos variables de sesi&oacute;n con tu
        nombre y la hora de creaci&oacute;n. Despu&eacute;s el programa sacar&aacute;
        este resultado:
    </p>
    <?php
        if ($_SERVER['REQUEST_URI']=="/DWES/T11/sesiones/6.php"){
            echo '<img src="../img/61.jpg">';
            echo "<br>";
            echo "<br>";
        } else {
            echo '<img src="./img/61.jpg">';
            echo "<br>";
            echo "<br>";
        }
    ?>
    <p>
        Los dos enlaces llevar&aacute;n a la misma p&aacute;gina pero mostrar&aacute;n
        dos pantallas distintas y en ambos casos la p&aacute;gina llamar&aacute; a
        otra donde se finalizar&aacute; la sesi&oacute;n y saldr&aacute; un mensaje
        indic&aacute;ndolo:
    </p>
    <?php
        if ($_SERVER['REQUEST_URI']=="/DWES/T11/sesiones/6.php"){
            echo '<img src="../img/62.jpg">';
            echo "<br>";
            echo "<br>";
            echo '<img src="../img/63.jpg">';
            echo "<br>";
            echo "<br>";
            echo "<h5><a href='./sesion_6.php'>ENLACE A SESION_6.PHP</a></h5>";
        } else {
            echo '<img src="./img/62.jpg">';
            echo "<br>";
            echo "<br>";
            echo '<img src="./img/63.jpg">';
            echo "<br>";
            echo "<br>";
            echo "<h5><a href='./sesiones/sesion_6.php'>ENLACE A SESION_6.PHP</a></h5>";
        }
    ?>
</h4>