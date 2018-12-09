<?php
    //(Parte 3 de 6.php) Nos enseña las cookies o nos redirige si no están creadas.
    if(isset($_COOKIE['datos'])){
        echo "<table>";
        foreach ($_COOKIE['datos'] as $clave=>$valor){
            echo "<tr><td>$clave</td><td>$valor</td></tr>";
        }
        echo "</table>";
    }else{
        header("Location: ./6.php");
    }
?>