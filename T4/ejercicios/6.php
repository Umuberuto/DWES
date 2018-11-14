<h3>
    Realiza un programa en el que crees un array multidimensional cargado con los
    datos de los empleados de una empresa (dni, nombre, salario, ...) u otra cosa
    que te inventes pero que contenga datos diferentes y no todos los elementos
    tengan todos los datos. Luego mu&eacute;stralo en una tabla por pantalla:
</h3>
<table>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Salario</th>
        <th>Edad</th>
    </tr>
    <?php
        $empresa[] = array("02Z", "Paco", 1200, 38);
        $empresa[] = array("03Z", "Lily", "", "");
        $empresa[] = array("06M", "Rafa", "", 25);
        $empresa[] = array("09P", "Sira", 1900, "");

        for ($i = 0; $i < count($empresa); $i++) {
            echo "<tr>";
            $j = 0;
            for (; $j < count($empresa[$i]);) {
                echo '<td>';
                if (!empty($empresa[$i][$j]))
                    echo $empresa[$i][$j];
                else
                    echo '*******';
                echo '</td>';
                $j++;
            }
            echo '</tr>';
        }
    ?>
</table>