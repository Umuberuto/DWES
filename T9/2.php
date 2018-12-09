<?php
/*
    Construir una página HTML desde la cual podamos enviar un fichero y controlar en la página .php: 
            -Si se produce un error mayor de cero se escribirá el error por la pantalla.
            -Si es que no se produce un error mostrará por pantalla el nombre, tipo, 
             tamaño (en KB) y la carpeta temporal y después se moverá el fichero a una 
             carpeta que le especifiquemos en el programa (se supone que debe existir y 
             le daremos la ruta).
*/
?>
<?php
    if (isset($_FILES['archivo'])){
    $KB=$_FILES['archivo']['size']/1000; /*Si no pongo esta línea el tamaño se
     * muestra en B (bytes). El ejercicio te pide el resultado en KB.*/
            switch ($_FILES['archivo']['error']){
                case 0:
                    echo $_FILES['archivo']['name']."<br>";
                    echo $_FILES['archivo']['type']."<br>";
                    echo $KB." KB.<br>";
                    echo sys_get_temp_dir()."<br>";
                    $archivo=$_FILES['archivo']['tmp_name'];/*$_FILES ['archivo']['tmp_name']
                     * es el nombre temporal del fichero pero ruta ENTERA. $_FILES ['archivo']['name']
                     * SOLO es el nombre original (sin ruta).*/
                    $destino= "./guardaarchivos/".$_FILES['archivo']['name'];/*IMPORTANTÍSIMO: Las rutas
                     * NO funcionan en el formato de WINDOWS (con las \) porque escapan los caracteres
                     * (Ej: \n=salto de línea). Solo funcionan con las (/) o con doble "\\"*/
                    if(move_uploaded_file($archivo, $destino)){
                        $error="<p>El fichero se ha subido correctamente:</p>";
                    } else {
                        $error="<p>Error al mover el archivo a una carpeta NO temporal.</p>";
                    }/*Nota: Para hacer este if primero hace la función move_uploaded_file que hace lo
                     * de mover el archivo y LUEGO devuelve true si ha tenido exito o false si ha fallado.*/
                    break;
                case 1:
                    $error= '<p>El fichero es de mayor tama&ntilde;o a la configuraci&oacute;n';
                    $error.=' de php.ini.</p>';
                    break;
                case 2:
                    $error= '<p>El fichero es de mayor tama&ntilde;o a lo permitido en el ';
                    $error.='formulario.</p>';
                    //$_FILES ['archivo']['size']==0 y $_FILES ['archivo']['tmp_name']==""
                    break;
                    //INTERESANTE:Coje este caso si se cumplen el caso 1 y el caso 2 simultáneamente.
                case 3:
                    $error= '<p>El fichero ha sido transferido parcialmente.</p>';
                    break;
                case 4:
                    $error= '<p>No se subi&oacute; ning&uacute;n fichero.</p>';
                    break;
                //Por lo visto NO existe el error 5
                case 6:
                    $error= '<p>No existe directorio temporal.</p>';
                    break;
            }
            
            die($error);
    } else {
        echo "<p>El archivo es muy grande para mandarlo por post.</p>";
    }
?>