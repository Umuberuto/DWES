<?php
/*
    Construir una página HTML desde la cual podamos enviar un  fichero  
    pero controlando que el tamaño máximo del archivo sea de 500000.  
    Luego en el fichero .php : 
    -se guardaran en variables los datos de la variable global S_FILES  
    -en el caso de que la subida haya sido correcta se mostraran los datos de 
    las variables por pantalla  y después moveremos el fichero a una carpeta 
    que este al mismo nivel que la carpeta donde está el fichero .php y si no 
    existe la creará
    -si la subida no se ha realizado de forma correcta el fichero controlará 
    usando la estructura if….elseif ---else

        *si tamaño es superior al permitido por PHP.INI
        *si tamaño es superior al permitido por el formulario
        *si el archivo no se recibió por completo 
        *si el archivo no se ha subido 
        *si se ha producido un error indeterminado
*/
?>
<?php
    $a= $_FILES['archivo']['name'];
    $b= $_FILES['archivo']['tmp_name'];
    $c= $_FILES['archivo']['type'];
    $d= $_FILES['archivo']['size'];
    $e= $_FILES['archivo']['error'];
    if ($e==0){
        echo $a."<br>".$b."<br>".$c."<br>".$d."<br>".$e."<br>";
        if(file_exists("./dircreadoparaficheros")){
            if(copy($b, "./dircreadoparaficheros/".$a)){ //copy () es parecido a move_uploaded_file () pero sirve para TODOS los archivos, NO solo para los subidos por formularios. Además NO borra el archivo, lo copia pero PHP borra la carpeta tmp cuando pasa tiempo. 
                echo "El fichero se ha copiado correctamente.";
            } else {echo 'Ha ocurrido un error al copiar al servidor el archivo';}
        }else{
            mkdir("./dircreadoparaficheros"); //Para crear la carpeta
            if(copy($b, "./dircreadoparaficheros/".$a)){
                echo "El fichero se ha copiado correctamente.";
            } else {echo 'Ha ocurrido un error al copiar al servidor el archivo';}
        }
    } elseif ($e==1){
          echo 'El fichero es de mayor tama&ntilde;o a la configuraci&uacute;n de php.ini';
      } elseif ($e==2){
            echo 'El fichero es de mayor tama&ntilde;o a lo permitido en el formulario';
        } elseif ($e==3){
              echo 'El fichero ha sido transferido parcialmente';
          } elseif ($e==4){
                echo 'No se subi&uacute; ning&uacute;n fichero';
            } else { 
                echo 'No existe directorio temporal';
              }
?>