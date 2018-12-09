<h3>
    Obtener la fecha actual usando la funci&oacute;n getdate y mostrar en una
    tabla la clave y el valor de cada uno de los componentes del array asociativo
    que devuelve esa funci&oacute;n usando un bucle foreach.
</h3>
<?php
    $arra=  getdate();
    echo "<table>";
    echo "<tr>";
    foreach ($arra as $clave=>$valor){
        echo "<td>$clave : $valor</td>";
    }
    echo "</tr>";
    echo "</table>";
?>