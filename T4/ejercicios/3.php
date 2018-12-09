<h4>
    Construir un array multidimensional escalar en el que met&aacute;is el mismo
    tipo de datos del ejercicio 1 pero poniendo datos de tres equipos. Deber&eacute;is
    cargarlo de tres formas distintas pero adem&aacute;s cada uno de los equipos
    tendr&aacute; distinto n&uacute;mero de jugadores y mostrarlos por pantalla en una
    tabla:
</h4>
<table>
    <?php
        $equipos[0][0]="Mary";
        $equipos[0][1]="Fito";
        $equipos[0][2]="Lara";
        $equipos[0][3]="John";
        $equipos[0][4]="Star";
        $equipos[0][5]="Mercurio";
        $equipos[4]=array("Nana","Jaime","Vivi","Iris"); /*Ese índice 4 esta escogido
        aposta para demostrar la importancia de reindexar.*/
        $equipos[1][]="Malcolm"; 
        $equipos[1][]="Xana";
        $equipos[1][]="Petros";
        
        //Reindexo $equipos
        $equiposreindexado=  array_values($equipos); /*Por haber reindexado la línea
        de Nana... (Línea 10) pasa a tener índice 1 en lugar de 4 en el nuevo array.
        Lo "malo" de reindexar es que también cambia el índice 1 del equipo equivalente
        a $equipos[1] por 2 y eso puede dar lugar a confusión.*/
        $elementos=count($equiposreindexado);
        $mayor=0;

        for($i=0;$i<$elementos;$i++){
            if (isset($equiposreindexado[$i]))
            if(count($equiposreindexado[$i])>$mayor)
                $mayor=  count ($equiposreindexado[$i]);
        }
        for($i=0;$i<$elementos;$i++){ /*No me vale sin reindexar porque por ejemplo
        puede ocurrir que el array tenga solo 3 elementos pero uno de sus índices sea
        50. De hecho si este ejercicio lo hubiese dejado sin reindexar la tabla
        mostraría 3 filas (porque el array tiene 3 elementos) pero una de ellas la
        hubiese considerado vacía y la hubiese llenado de *** y no hubiese mostrado
        los datos de $equipos [4];*/
            echo '<tr>';
            for ($j=0;$j<$mayor;$j++){
                echo '<td>';
                    if(isset($equiposreindexado[$i][$j]))
                        echo "{$equiposreindexado[$i][$j]}";
                    else
                        echo "**************";
                echo '</td>';
            }
            echo "</tr>";
        }
        
        /*Preguntar a Conchi por curiosidad: var_dump se ejecuta antes que los for...
        ¿Cómo puedo hacer que el resultado sea que primero imprima la tabla y luego
        el var_dump? ->NO se puede (o al menos NO lo sabe). Tendría sentido que no se
        pudiera porque en teoría el var_dump solo es para debuggear...
        */ 
    ?>
</table>