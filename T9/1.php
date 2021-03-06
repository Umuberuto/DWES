<?php
/*
    Construir una página HTML desde la cual podamos enviar un mensaje usando un 
    control tipo textarea y ademas un fichero adjunto.  
    En el fichero PHP  realizaremos las siguientes comprobaciones: 
        -Haciendo uso de la función is_uploaded_file comprobar si la componente de 
        $_FILES['fichero']['tmp_name'] está vacía  y si es así cargar el error que 
        se ha producido en una variable $error y después usar la función die para 
        mostrar el error y acabar el script. Si no está vacía nos dará un mensaje 
        de que el fichero se ha subido correctamente.
        -Comprobar si el fichero esta comprimido preguntando si es de tipo  
        'application/x-zip-compressed'. 
*/
?>
<?php
    if (isset($_FILES ['archivo']['tmp_name'])){ /*IMPORTANTE: Si esta línea y
     * el último else (Línea 75) NO estuvieran, daría el error ENTERO explicado en
     * el caso 6. Con estas líneas almenos sólo muestra solo parte del error porque
     * SÍ llega a crear $_FILES ['archivo']['tmp_name'] y me dará error  Warning:
     * POST Content-Length of 25235415 bytes exceeds the limit of 8388608 bytes in
     * Unknown on line 0..(Extra:Mirar nota del caso 6)*/
        if (is_uploaded_file($_FILES['archivo']['tmp_name'])){
            echo '<p>El fichero se ha subido correctamente.</p>';
            if($_FILES ['archivo']['type']=='application/x-zip-compressed'){
            //Mirar bien los tipos MIME que existen.
                echo "<p>El fichero est&aacute; comprimido.</p>"; /*IMPORTANTE: SOLO
                 * detecta como comprimidos un archivo .ZIP / Un archivo .RAR NO
                 * cuenta como comprimido asique saldrá el mensaje de la siguiente
                 * línea.*/
            } else {
                echo "<p>El fichero NO est&aacute; comprimido</p>";
            }
        } else {
            switch ($_FILES['archivo']['error']){
                case 1:
                    $error= '<p>El fichero es de mayor tama&ntilde;o a la ';
                    $error.='configuraci&oacute;n de php.ini</p>';
                    /*Antes tenía: echo 'El fichero es de mayor tamaño a la
                     * configuración de php.ini';*/
                    break;
                case 2:
                    $error= '<p>El fichero es de mayor tama&ntilde;o a lo permitido';
                    $error.=' en el formulario</p>';
                    /*$_FILES ['archivo']['size']==0 y $_FILES ['archivo']['tmp_name']==""
                     * (NO none como decía en los apuntes.)*/
                    break;
                    /*INTERESANTE:Coje este caso si se cumplen el caso 1 y el caso 2
                     * simultáneamente.*/
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
                /*IMPORTANTE: Antes me daba error cuando NO usaba la variable
                 * $error con el die. En su lugar usaba echo. Todas las líneas
                 * eran como el comentario del (caso 1)): Si el fichero que mandan
                 * es MUCHO más grande que el tamaño del php.ini y el formulario,
                 * y es más grande que lo que permite el método POST (esto también
                 * se configura en el php.ini) no creará la variable $_FILES
                 * ['archivo']['tmp_name'] y me dará error en mi programa porque
                 * intentará acceder a la variable $_FILES ['archivo']['tmp_name']
                 * (que no existe). Dando el siguiente error por ejemplo:
                 * Warning: POST Content-Length of 25235415 bytes exceeds the limit
                 * of 8388608 bytes in Unknown on line 0. Notice: Undefined index:
                 * archivo in C:\xampp\htdocs\EjT9\1.php on line 5 Notice: Undefined
                 * index: archivo in C:\xampp\htdocs\DWES\T9\1.php...*/
                }
            die($error);
          }
    } else {
        echo "<p>";
        echo 'Este error es raro que salga porque es un error "anterior" al resto';
        echo ' de errores. Solo sale cuando intentas pasar por el formulario un ';
        echo 'archivo MUY grande. Tanto que directamente el m&eacute;todo POST lo';
        echo ' rechaza.';
        echo "</p>";
    }
?>