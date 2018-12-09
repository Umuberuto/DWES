<h3>
    <p>
        Usar dos bucles for anidados para construir una tabla de multiplicar
        similar a la del dibujo:
    </p>
    <p>
        Ej:
    </p>
</h3>
<img src="./img/2.JPG">
<br>

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