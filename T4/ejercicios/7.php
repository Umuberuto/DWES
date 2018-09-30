<h2>Haz el mismo ejercicio pero utiliza arrays asociativos. (Realiza un programa en el que crees un array multidimensional cargado con los datos de los empleados de una empresa (dni, nombre, salario, ...) u otra cosa que te inventes pero que contenga datos diferentes y no todos los elementos tengan todos los datos. Luego mu&eacute;stralo en una tabla por pantalla):</h2>
<table>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Salario</th>
        <th>Edad</th>
    </tr>
    <?php
    $empresaasociativa = array(
        "02Z" => array("nombre" => "Paco", "sueldo" => 1200, "edad" => 38),
        "03Z" => array("nombre" => "Lily", "sueldo" => "", "edad" => "")
    );
    $empresaasociativa["06M"] = array("nombre" => "Rafa", "sueldo" => "", "edad" => 25);
    $empresaasociativa["09P"]["nombre"] = "Sira";
    $empresaasociativa["09P"]["sueldo"] = 1900;
    $empresaasociativa["09P"]["edad"] = "";
    foreach ($empresaasociativa as $clave => $valor) {
        echo "<tr>";
        echo '<td>' . $clave . "</td>";
        foreach ($valor as $dato) {
            echo "<td>";
            if ($dato != "")
                echo $dato;
            else {
                echo '*****';
            }
        }
        echo '</tr>';
    }
    ?>
</table>