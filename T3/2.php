<h2>Usar dos bucles for anidados para construir una tabla de multiplicar similar a la del dibujo</h2>
<?php
    echo "<table>";
    for($i=1;$i<11;$i++){
        echo "<tr>";
        for($j=1;$j<11;$j++){
            echo "<td>".($i*$j)."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>