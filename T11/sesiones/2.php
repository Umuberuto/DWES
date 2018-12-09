<h4>
    <p>Cree tres p&aacute;ginas php sesion_2.php, sesion_2a.php y sesion_2b.php.</p>
    <ul>
        <li>
            <p>
                En la primera abriremos sesi&oacute;n, crearemos una variable de
                sesi&oacute;n y almacenaremos en ella un nombre por ejemplo Alberto
                y mostraremos su contenido. Adem&aacute;s en ella crearemos un
                enlace a la segunda p&aacute;gina.
            </p>
        </li>
        <li>
            <p>
                En la segunda p&aacute;gina mostraremos por pantalla el valor de
                la variable de sesi&oacute;n y despu&eacute;s se destruir&aacute;.
                Adem&aacute;s en ella habr&aacute; un enlace a la tercera p&aacute;gina.    
            </p>
        </li>
        <li>
            <p>
                En esta tercera p&aacute;gina, se destruir&aacute; la sesi&oacute;n por
                completo y nos permitir&aacute; con un enlace volver a la primera
                p&aacute;gina para volver a empezar.    
            </p>
        </li>
    </ul>
    <p>
        La ejecuci&oacute;n de las p&aacute;ginas se nos deber&aacute; mostrar
        semejante a esto:
    </p>
</h4>
<?php
    if ($_SERVER['REQUEST_URI']=="/DWES/T11/sesiones/2.php"){
        echo '<img src="../img/21.jpg">';
        echo "<br>";
        echo "<br>";
        echo '<img src="../img/22.jpg">';
        echo "<br>";
        echo "<br>";
        echo '<img src="../img/23.jpg">';
        echo "<br>";
        echo "<br>";
        echo "<h5><a href='./sesion_2.php'>ENLACE A SESION_2.PHP</a></h5>";
    } else {
        echo '<img src="./img/21.jpg">';
        echo "<br>";
        echo "<br>";
        echo '<img src="./img/22.jpg">';
        echo "<br>";
        echo "<br>";
        echo '<img src="./img/23.jpg">';
        echo "<br>";
        echo "<br>";
        echo "<h5><a href='./sesiones/sesion_2.php'>ENLACE A SESION_2.PHP</a></h5>";
    }
    
?>