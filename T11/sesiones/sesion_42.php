<?php
    ob_start();
    session_start();
    $ninguno=true; //Para evitar mi siguiente nota.
    /*NOTA: Lamentablemente NO puedo hacerlo con un switch con el siguiente código:
    switch (true){
        case isset($_POST['nombre']):
            echo "<p>";
            echo "Tu nombre <b>{$_POST['nombre']}</b> viene del POST.";
            echo "</p>";
            break;
        case isset($_GET['nombre']):
            echo "<p>";
            echo "Tu nombre <b>{$_GET['nombre']}</b> viene del GET.";
            echo "</p>";
            break;
        case isset($_COOKIE['nombre']):
            echo "<p>";
            echo "Tu nombre <b>{$_COOKIE['nombre']}</b> viene de una COOKIE.";
            echo "</p>";
            break;
        case isset($_SESSION['nombre']):
            echo "<p>";
            echo "Tu nombre <b>{$_SESSION['nombre']}</b> viene de una variable de SESSION.";
            echo "</p>";
            break;
        default :
            echo "<p>";
            echo "NO se ha reconocido <b>NING&Uacute;N</b> nombre.";
            echo "</p>";
    }
    Porque funciona pero si se CUMPLEN varios a la vez solo MUESTRA 1.
    */
    
    if (isset($_POST['nombre'])){
        $ninguno=false;
        echo "<p>";
        echo "Tu nombre <b>{$_POST['nombre']}</b> viene del POST.";
        echo "</p>";
    }
    
    if (isset($_GET['nombre'])){
        $ninguno=false;
        echo "<p>";
        echo "Tu nombre <b>{$_GET['nombre']}</b> viene del GET.";
        echo "</p>";
    }
    
    if (isset($_COOKIE['nombre'])){
        $ninguno=false;
        echo "<p>";
        echo "Tu nombre <b>{$_COOKIE['nombre']}</b> viene de una COOKIE.";
        echo "</p>";
    }
    
    if (isset($_SESSION['nombre'])){
        $ninguno=false;
        echo "<p>";
        echo "Tu nombre <b>{$_SESSION['nombre']}</b> viene de una variable de SESSION.";
        echo "</p>";
    }
    
    if($ninguno){
        echo "<p>";
        echo "NO se ha reconocido <b>NING&Uacute;N</b> nombre.";
        echo "</p>";
    }
?>    

<a href="./sesion_4.php">Volver a sesion_4.php</a>
<br>
<a href="../index.php#ej4">VOLVER AL &Iacute;NDICE</a>

<?php
    unset($_SESSION);
    setcookie(session_name(), "", time()-3600, "/");
    session_destroy();
    ob_end_flush();
?>