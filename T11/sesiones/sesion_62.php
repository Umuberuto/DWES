<?php
    $pasado=false;
    session_name("DatosUser");
    if(isset($_GET['PHPSESSID'])){
        session_id(urldecode($_GET['PHPSESSID']));
        $pasado=true;
    }
    /*IMPORTANTE: SIEMPRE que haga algún cambio a la session, session_start()
    debe ir al final de los cambios (pero al principio de lo demás como siempre).*/
    session_start();
?>

<?php
    if (isset($_SESSION['nombre'])){
        echo "<p>Se puede acceder a las variables de sesi&oacute;n:</p>";
        echo "<p>Te llamas {$_SESSION['nombre']} y entraste: "; 
        echo date("l dS \of F Y h:i:s A",$_SESSION['fecha']),".</p>";
        echo "<p>Con session_name obtenemos ",session_name(),".</p>";
    } else {
        echo "<p>Ha intentado usar una cookie para iniciar session ";
        echo "aunque su navegador tiene las cookies desactivadas.</p>";
        echo "<p><b>ACTIVE</b> las cookies o acceda a esta p&aacute;gina";
        echo " a trav&eacute;s del enlace facilitado por ./sesion_6.php.</p>";
        echo "<a href='./sesion_6.php'>Volver a sesion_6.php</a><br>";
    }

    if($pasado){
        echo "<p>";
        echo "Tu identificador de sesi&oacute;n es: ";
        echo "<b>",session_id(),"</b>";
        echo "</p>";
        echo "<p>";
        echo "<b>NUNCA</b> se debe pasar el identificador de sesi&oacute;n por";
        echo " <b>URL,</b> es <b>MUY INSEGURO.</b>";
        echo "</p>";
    }
?>
<a href="./sesion_63.php">Clic aqu&iacute; para cerrar sesi&oacute;n</a>