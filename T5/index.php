<?php include_once './funcionesArrays.php'; ?>
<?php include_once './bibliotecafunciones.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="Nicolás Umberto Sánchez Avilés">
        <title>Curso DWES T5</title>
        <style>
            b{
                font-size: 110%;
            }
        </style>
    </head>
    <body>
        <h1>TEMA 5: FUNCIONES.</h1>
        <h2>ENUNCIADO:</h2>
        <h3>
            <p>
                Crea un fichero de nombre funcionesArrays.php que contenga una
                serie de funciones para poder ejcutar con arrays de una dimensi&oacute;n
                y de n&uacute;meros enteros:
            </p>
            <ol type="a">
                <li>
                    <b>crearArrayInt:</b> M&eacute;todo que crea un array de tama&ntilde;o
                    n con n&uacute;meros aleatorios cuyo intervalo (m&iacute;nimo
                    y m&aacute;ximo) se indica como par&aacute;metro.
                </li>
                <li>
                    <b>buscarValorMinimo:</b> Nos devuelve el m&iacute;nimo valor del
                    array que le pasemos como par&aacute;metro.
                </li>
                <li>
                    <b>buscarValorMaximo:</b> Lo mismo pero el valor m&aacute;ximo.
                </li>
                <li>
                    <b>mediaArray:</b> Devuelve la media del array que se pasa como
                    par&aacute;metro.
                </li>
                <li>
                    <b>estaEnArray:</b> Nos dice si un n&uacute;mero est&aacute; o no
                    en el array y en que posici&oacute;n.
                </li>
                <li>
                    <b>darVuelta:</b> Le da la vuelta a un array.
                </li>
                <li>
                    <b>cambiarPosicionesD:</b> Mueve (y rota) n posiciones a la derecha
                    los n&uacute;meros de un array.
                </li>
                <li>
                    <b>cambiarposicionesI:</b> rota n posiciones a la izquierda los
                    n&uacute;meros de un array.
                </li>
            </ol>
        </h3>
        <h3>
            <p>
                Crear un fichero (biblioteca de funciones) para arrays (de dos dimensiones)
                de n&uacute;meros enteros que contenga las siguientes funciones:
            </p>
            <ol type="a">
                <li>
                    <b>crearArrayBi:</b> Crea un array de tama&ntilde;o n x m con
                    n&uacute;meros aleatorios cuyo intervalo (m&iacute;nimo y m&aacute;ximo)
                    se indica como par&aacute;metro.
                </li>
                <li>
                    <b>buscarFilaArrayBi:</b> Nos devuelve la fila x del array que se pasa
                    como par&aacute;metro.
                </li>
                <li>
                    <b>buscarColumnaArrayBi:</b> Nos devuelve la columna y del array que se
                    pasa como par&aacute;metro.
                </li>
                <li>
                    <b>coordenadasArrayBi:</b> Devuelve la fila y la columna de la primera
                    vez que aparece un determinado valor dentro del array bidimensional.
                    Cuando el n&uacute;mero no exista en el array la funci&oacute;n nos
                    devuelve el array {-1, -1}.
                </li>
            </ol>
        </h3>
        <h2>PRUEBAS DE LAS FUNCIONES:</h2>
        <h3>Prueba funci&oacute;n crearArrayInt()</h3>
        <?php 
            $parra=crearArrayInt(6, 1, 5);
            echo "<p>";
                var_dump($parra);
            echo "</p>";
        ?>
        
        <h3>Prueba funci&oacute;n buscarValorMinimo()</h3>
        <?php 
            echo "<p>El valor m&iacute;nimo del array \$parra es: ".buscarValorMinimo($parra).".</p>";
        ?>
        
        <h3>Prueba funci&oacute;n buscarValorMaximo()</h3>
        <?php 
            echo "<p>El valor m&aacute;ximo del array \$parra es: ".buscarValorMaximo($parra).".</p>";
        ?>
        
        <h3>Prueba funci&oacute;n mediaArray()</h3>
        <?php 
            echo "<p>La media del array \$parra es: ".  mediaArray($parra).".</p>";
        ?>
        
        <h3>Prueba funci&oacute;n estaEnArray()</h3>
        <?php
            $num=  rand(0, 10);
            $tmp=  estaEnArray($parra, $num);
            if($tmp[0]){
                echo "<p>El n&uacute;mero $num est&aacute; en el array con la clave {$tmp[1]}.</p>";
            } else {
                echo "<p>".$tmp[1]."</p>";
            }
        ?>
        
        <h3>Prueba funci&oacute;n darVuelta()</h3>
        <?php
            darVuelta($parra);
            echo "<p>";
                var_dump($parra);
            echo "</p>";
        ?>
        
        <h3>Prueba funci&oacute;n cambiarPosicionesD()</h3>
        <?php
            $posiciones=2;
            echo "<h4>Array sin cambiar</h4>";
            echo "<p>";
                var_dump($parra);
            echo "</p>";
            echo "<h4>Array cambiado</h4>";
            cambiarPosicionesD($parra,$posiciones);
            echo "<p>";
                var_dump($parra);
            echo "</p>";
        ?>
        
        <h3>Prueba funci&oacute;n cambiarPosicionesI()</h3>
        <?php
            $posiciones=2;
            echo "<h4>Array sin cambiar</h4>";
            echo "<p>";
                var_dump($parra);
            echo "</p>";
            echo "<h4>Array cambiado</h4>";
            cambiarPosicionesI($parra,$posiciones);
            echo "<p>";
                var_dump($parra);
            echo "</p>";
        ?>
        
        <h3>Prueba funci&oacute;n crearArrayBi()</h3>
        <?php 
            $parrabi=crearArrayBi(6, 6, 1, 6);
            echo "<p>";
                var_dump($parrabi);
            echo "</p>";
        ?>
        
        <h3>Prueba funci&oacute;n buscarFilaArrayBi()</h3>
        <?php
            $fila0=  buscarFilaArrayBi(0, $parrabi);
            echo "<h4>Ejemplo fila 0</h4>";
            echo "<p>";
                var_dump($fila0);
            echo "</p>";
        ?>
        
        <h3>Prueba funci&oacute;n buscarColumnaArrayBi()</h3>
        <?php
            $columna1=  buscarColumnaArrayBi(1, $parrabi);
            echo "<h4>Ejemplo columna 1</h4>";
            echo "<p>";
                var_dump($columna1);
            echo "</p>";
        ?>
        
        <h3>Prueba funci&oacute;n coordenadasArrayBi()</h3>
        <?php
            $coordenadas= coordenadasArrayBi(4, $parrabi);
            echo "<h4>Ejemplo buscamos 4:</h4>";
            if(($coordenadas[0]==-1)&&($coordenadas[1]==-1)){
                echo "<h5>No se encuentra el n&uacute;mero 4</h5>";
            } else {
                echo "<h5>Fila: $coordenadas[0] Columna: $coordenadas[1]</h5>";
            }
        ?>
        <h1><a href="../index.php">VOLVER AL &Iacute;NDICE DE TEMAS</a></h1>
    </body>
</html>