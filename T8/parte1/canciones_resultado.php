<?php
    //Este código muestra los datos recogidos por el formulario "buscacanciones" y un enlace para volver al formulario buscador. Si se ha accedido directamente a este código (Es decir, faltan los datos del formulario) muestra un mensaje indicando que faltan los datos y que va a redirigirnos al formulario tras 5 segundos. Si muestra el mensaje, redirige al usuario a los 5 segundos.
    if( (!isset($_POST['can']) || $_POST['can']=="") || (!isset($_POST['cat'])) || (!isset($_POST['gen'])) ){
        header("Refresh: 5; url=./canciones.html");
        echo "Faltan datos. Usted ser&aacute; redirigido a un formulario para cumplimentar dichos datos en 5 segundos.";
    } else {
        echo "<h1>Datos introducidos:</h1>";
        echo "<b>Texto buscado:</b> {$_POST['can']}.<br>";
        echo "<b>Se ha buscado en:</b> {$_POST['cat']}.<br>";
        echo "<b>G&eacute;nero musical seleccionado:</b> {$_POST['gen']}.<br>";
        echo "<a href='./canciones.html'> Volver al buscador </a>";
    }
?>