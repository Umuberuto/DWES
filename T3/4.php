<h3>
    Crear un array y cargarlo con diferentes tipos de datos NULL, entero, float,
    cadena, vacio, boolean. Despu&eacute;s mostrar sus datos en una misma tabla
    pero de dos formas distintas la primera fila de color amarillo recorre los
    datos del array usando un bucle for y luego otra fila de color verde usando
    un bucle foreach (la tabla tendr&aacute; dos filas * n columnas dependiendo
    de los datos que cada uno de vosotros hay&aacute;is metido)
</h3>
<?php
    $arra=array(null,6,3.3,"Yupi","",true);
    echo "<table>";
        echo '<tr style="color:yellow;">';
        for($i=0;$i<6;$i++){
            echo "<td>{$arra[$i]}</td>";
        }
        echo "</tr>";
        echo '<tr style="color:green;">';
        foreach ($arra as $valor){
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    echo "</table>";
?>