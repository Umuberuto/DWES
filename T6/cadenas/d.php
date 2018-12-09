<h4>
    Construir un array que contenga el c&oacute;digo de 8 productos cada uno de
    los cuales est&aacute; representado por un c&oacute;digo CNNNNCCC siendo cada
    C un car&aacute;cter y cada N un n&uacute;mero del 0 al 9 (por ejemplo A1212BXF).
    Hacer un programa que sume 1000 a cada una de las partes num&eacute;ricas de
    los c&oacute;digos y luego muestre los nuevos c&oacute;digos por pantalla:
</h4>
<?php
    $productos=array(
        "Z1324JJJ",
        "E2387YJY",
        "H9123LLJ",
        "J9924VJG",
        "N1854JHP",
        "X3724PPJ",
        "F1374JOB",
        "L6554JWZ",
        );
    echo "<p>C&oacute;digos sin cambiar: <br>";
    foreach ($productos as $valor){
        echo "| $valor ";
    }
    echo "|</p>";
    
    echo "<p>C&oacute;digos cambiados: <br>";
    foreach ($productos as $clave=>$valor){
        if(intval($valor[1])<9){
            $productos[$clave][1]= $productos[$clave][1]+1;     
        } else {
            $productos[$clave][2]= "9";
            $productos[$clave][3]= "9";
            $productos[$clave][4]= "9";
        }
        echo "| $productos[$clave] ";
    }
    echo "|</p>";
?>