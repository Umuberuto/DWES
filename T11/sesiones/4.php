<h4>
    <p>
        Realizar un script sesiones4.php que cree una sesi&oacute;n y una variable
        de sesi&oacute;n con tu nombre y que despu&eacute;s llame a otro programa
        envi&aacute;ndole el SID de la sesi&oacute;n. En el segundo programa
        controlaremos si el SID nos ha llegado por la URL o por una cookie. Ej:
    </p>
</h4>
<?php
    if ($_SERVER['REQUEST_URI']=="/DWES/T11/sesiones/4.php"){
        echo '<img src="../img/41.jpg">';
        echo "<br>";
        echo "<br>";
        echo '<img src="../img/42.jpg">';
        echo "<br>";
        echo "<br>";
        echo "<h5><a href='./sesion_4.php'>ENLACE A SESION_4.PHP</a></h5>";
    } else {
        echo '<img src="./img/41.jpg">';
        echo "<br>";
        echo "<br>";
        echo '<img src="./img/42.jpg">';
        echo "<br>";
        echo "<br>";
        echo "<h5><a href='./sesiones/sesion_4.php'>ENLACE A SESION_4.PHP</a></h5>";
    }
?>
<h6>
    NOTA: Cambio de enunciado M&Iacute;O: El sesion_4.php permite crear una cookie,
    crear una variable de session, mandar un nombre por post o por get. El sesion_42.php
    comprobar&aacute; si ha recibido el nombre por POST, GET, COOKIE, variable de SESSION
    o NO lo ha recibido.
</h6>