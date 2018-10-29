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
    $KB=$_FILES['archivo']['size']/1000; //Si no pongo esta línea el tamaño se muestra en B (bytes). El ejercicio te pide el resultado en KB.
            switch ($_FILES['archivo']['error']){
                case 0:
                    echo $_FILES['archivo']['name']."<br>";
                    echo $_FILES['archivo']['type']."<br>";
                    echo $KB." KB.<br>";
                    echo sys_get_temp_dir()."<br>";
                    $archivo=$_FILES['archivo']['tmp_name'];//$_FILES ['archivo']['tmp_name'] es el nombre temporal del fichero pero ruta ENTERA. $_FILES ['archivo']['name'] SOLO es el nombre original (sin ruta)
                    $destino= "./guardaarchivos/".$_FILES['archivo']['name'];//IMPORTANTÍSIMO: Las rutas NO funcionan en el formato de WINDOWS (con las \) porque escapan los caracteres (Ej: \n=salto de línea). Solo funcionan con las (/)
                    if(move_uploaded_file($archivo, $destino)){$error="El fichero se ha subido correctamente:";}else{$error="Error al mover el archivo a una carpeta NO temporal";}//Nota: Para hacer este if primero hace la función move_uploaded_file que hace lo de mover el archivo y LUEGO devuelve true si ha tenido exito o false si ha fallado.
                    break;
                case 1:
                    $error= 'El fichero es de mayor tama&ntilde;o a la configuraci&oacute;n de php.ini';//echo 'El fichero es de mayor tamaño a la configuración de php.ini';
                    break;
                case 2:
                    $error= 'El fichero es de mayor tama&ntilde;o a lo permitido en el formulario'; //$_FILES ['archivo']['size']==0 y $_FILES ['archivo']['tmp_name']=="none"
                    break;
                    //INTERESANTE:Coje este caso si se cumplen el caso 1 y el caso 2 simultáneamente.
                case 3:
                    $error= 'El fichero ha sido transferido parcialmente';
                    break;
                case 4:
                    $error= 'No se subi&oacute; ning&uacute;n fichero';
                    break;
                //Por lo visto NO existe el error 5
                case 6:
                    $error= 'No existe directorio temporal';
                    break;
                //IMPORTANTE (Para evitar lo que voy a decir ahora está la línea 4) (Este error daba sin usar la variable $error con el die. En su lugar usaba echo. Todas las líneas eran como el comentario de la línea 10 (caso 1)): Si el fichero que mandan es MUCHO más grande que el tamaño del php.ini y el formulario, y es más grande que lo que permite el método POST (esto también se configura en el php.ini) no creará la variable $_FILES ['archivo']['tmp_name'] y me dará error en mi programa porque intentará acceder a la variable $_FILES ['archivo']['tmp_name'] (que no existe). Dando el siguiente error por ejemplo: Warning: POST Content-Length of 25235415 bytes exceeds the limit of 8388608 bytes in Unknown on line 0. Notice: Undefined index: archivo in C:\xampp\htdocs\EjT9\1.php on line 5 Notice: Undefined index: archivo in C:\xampp\htdocs\EjT9\1.php on line 8
            }
            
            die($error);
    } else {
        echo "El archivo es muy grande para mandarlo por post";
    }
?>