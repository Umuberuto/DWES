<?php
    ob_start();
    session_start();
?>

<form name="creacookie" method="POST" action="">
    <input type="text" name="nombrec" id="nombrec">
    <input type="submit" value="Crear cookie">
</form>
<br>

<form name="creavariablesession" method="POST" action="">
    <input type="text" name="nombres" id="nombres">
    <input type="submit" value="Crear variable de Session">
</form>
<br>

<form name="nombrepost" method="POST" action="./sesion_42.php">
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Enviar nombre por POST">
</form>
<br>

<form name="nombreget" method="GET" action="./sesion_42.php">
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Enviar nombre por GET">
</form>
<br>

<?php
    if(isset($_REQUEST['nombrec'])){
        if (setcookie('nombre',$_REQUEST['nombrec'],  time()+3600, "/")){
            echo "<p>Cookie nombre con valor {$_REQUEST['nombrec']} de una hora";
            echo " de duraci&oacute;n creada con &eacute;xito.</p>";
        }
    }
    
    if (isset($_REQUEST['nombres'])){
        $_SESSION['nombre']=$_REQUEST['nombres'];
        echo "<p>Se ha guardado {$_REQUEST['nombres']} en la variable de session";
        echo " nombre.</p>";
    }
?>

<a href="./sesion_42.php">Ir a sesion_42.php</a>

<?php ob_end_flush();?>