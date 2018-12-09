<?php
    /*(Parte 2 de 5.php) Muestra en una tabla los nombres de las cookies activas
    y su valor y en el caso de que no existan en la tabla saldrá un mensaje diciendo
    que no hay cookies activas.*/
    echo "<table>";
    if (!empty($_COOKIE)){ /*IMPORTANTE: Uso empty en lugar de isset porque aunque
    NO existan cookies, el array $_COOKIES existe, por eso NUNCA entraba en el else.*/
        foreach ($_COOKIE as $nombre=> $valor){
            if(!is_array($valor)){ /*Esta línea la he puesto porque si incluyo este
            ejercicio en el index en algunos ejercicios se crean array de cookies y
            me sale el error de intentar transformar un array en un string...*/
                echo "<tr>
                        <td>$nombre</td>";
                  echo "<td>$valor</td>";
                echo "</tr>";
            }else{
                echo "<tr>
                        <td>$nombre</td>";
                  echo "<td>";
                foreach ($valor as $clave=>$valori){
                    echo "$clave : $valori ";
                }
                  echo "</td>";
                echo "</tr>";
            }
        }
    }else{
        echo '<tr><td>No hay cookies activas.</td></tr>';
    }
    echo "</table>";
?>