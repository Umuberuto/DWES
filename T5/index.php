<?php include_once './funcionesArrays.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Prueba funci&oacute;n crearArrayInt()</h1>
        <?php 
            $parra=crearArrayInt(6, 1, 5);
            var_dump($parra);
        ?>
        
        <h1>Prueba funci&oacute;n buscarValorMinimo()</h1>
        <?php 
            echo "El valor m&iacute;nimo del array \$parra es: ".buscarValorMinimo($parra).".<br>";
        ?>
        
        <h1>Prueba funci&oacute;n buscarValorMaximo()</h1>
        <?php 
            echo "El valor m&aacute;ximo del array \$parra es: ".buscarValorMaximo($parra).".<br>";
        ?>
        
        <h1>Prueba funci&oacute;n mediaArray()</h1>
        <?php 
            echo "La media del array \$parra es: ".  mediaArray($parra).".<br>";
        ?>
        
        <h1>Prueba funci&oacute;n estaEnArray()</h1>
        <?php
            $num=  rand(0, 10);
            $tmp=  estaEnArray($parra, $num);
            if($tmp[0]){
                echo "El n&uacute;mero $num est&aacute; en el array con la clave {$tmp[1]}.<br>";
            } else {
                echo $tmp[1]."<br>";
            }
        ?>
        
        <h1>Prueba funci&oacute;n darVuelta()</h1>
        <?php
            darVuelta($parra);
            var_dump($parra);
        ?>
        
        <h1>Prueba funci&oacute;n cambiarPosicionesD()</h1>
        <?php
            $posiciones=2;
            echo "<h2>Array sin cambiar</h2>";
            var_dump($parra);
            echo "<h2>Array cambiado</h2>";
            cambiarPosicionesD($parra,$posiciones);
            var_dump($parra);
        ?>
        
        <h1>Prueba funci&oacute;n cambiarPosicionesI()</h1>
        <?php
            $posiciones=2;
            echo "<h2>Array sin cambiar</h2>";
            var_dump($parra);
            echo "<h2>Array cambiado</h2>";
            cambiarPosicionesI($parra,$posiciones);
            var_dump($parra);
        ?>
        <h1><a href="../index.php">Volver al &Iacute;NDICE de temas</a></h1>
    </body>
</html>