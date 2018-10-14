<?php include_once './funcionesArrays.php'; ?>
<?php include_once './bibliotecafunciones.php'; ?>
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
        
        <h1>Prueba funci&oacute;n crearArrayBi()</h1>
        <?php 
            $parrabi=crearArrayBi(6, 6, 1, 6);
            var_dump($parrabi);
        ?>
        
        <h1>Prueba funci&oacute;n buscarFilaArrayBi()</h1>
        <?php
            $fila0=  buscarFilaArrayBi(0, $parrabi);
            echo "<h2>Ejemplo fila 0</h2>";
            var_dump($fila0);
        ?>
        
        <h1>Prueba funci&oacute;n buscarColumnaArrayBi()</h1>
        <?php
            $columna1=  buscarColumnaArrayBi(1, $parrabi);
            echo "<h2>Ejemplo columna 1</h2>";
            var_dump($columna1);
        ?>
        
        <h1>Prueba funci&oacute;n coordenadasArrayBi()</h1>
        <?php
            $coordenadas= coordenadasArrayBi(4, $parrabi);
            echo "<h2>Ejemplo buscamos 4:</h2>";
            if(($coordenadas[0]==-1)&&($coordenadas[1]==-1)){
                echo "<h3>No se encuentra el n&uacute;mero 4</h3>";
            } else {
                echo "<h3>Fila: $coordenadas[0] Columna: $coordenadas[1]</h3>";
            }
        ?>
        <h1><a href="../index.php">Volver al &Iacute;NDICE de temas</a></h1>
    </body>
</html>