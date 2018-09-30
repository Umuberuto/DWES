<h2>Crear una agenda usando una matriz multidimensional asociativa que contenga el nombre, direcci&oacute;n , tel&eacute;fono y correo electr&oacute;nico de nuestros amigos:</h2>
<?php
    $agenda=array(
        "001J"=>array( //Estos índices son como un DNI (irrepetibles) para que me sirvan de clave.
                    "nombre"=>"Mary",
                    "dir"=>"Calle de las Amapolas 2 2&ordm;B",
                    "tel"=>666666666,
                    "correo"=>"ma@gmail.com"
                ),
        "002Y"=>array(
                    "nombre"=>"Mary",
                    "dir"=>"Calle de las Lilas 3 3&ordm;B",
                    "tel"=>777777777,
                    "correo"=>"mar@hotmail.com"
                ),
        "003Z"=>array(
                    "nombre"=>"Paco",
                    "dir"=>"Calle de las Margaritas 2 1&ordm;B",
                    "tel"=>666665555,
                    "correo"=>"paqui@gmail.com"
                ),
        "007J"=>array(
                    "nombre"=>"Joseph",
                    "dir"=>"Calle de los Tulipanes 6 5&ordm;A",
                    "tel"=>656335255,
                    "correo"=>"josefinofilipino@hotmail.com"
                ),
    );
?>
<h3>Agenda:</h3>
<table>
    <tr>
        <th>C&Oacute;DIGO/DNI</th>
        <th>NOMBRE</th>
        <th>DIRECCI&Oacute;N</th>
        <th>TEL&Eacute;FONO</th>
        <th>CORREO ELECTR&Oacute;NICO</th>
    </tr>
<?php
    foreach ($agenda as $clave=>$valor){
        echo '<tr>';
            echo '<td>'.$clave."</td>";
            foreach ($valor as $valori)
                echo "<td>$valori</td>";
        echo '</tr>';
    }
?>
</table>