<?php
/*
    Construir un formulario HTML que nos permita enviar cuatro ficheros distintos 
    usando un array. El fichero .php en el servidor nos mostrara datos sobre los 
    ficheros enviados.
*/
?>
<?php
if(isset($_FILES['archivos'])){
    $total=  count($_FILES['archivos']['name']); /*IMPORTANTE: count ($_FILES['archivos'])
     * da 5 pero count ($_FILES['archivos']['name']) da 4.*/
    for($i=0;$i<$total;$i++){
        if ($_FILES['archivos']['error'][$i]==4){
            $a=$i+1;
            echo "<p>No se ha subido un fichero $a.</p><br>";

        } else {
            echo "<p>".$_FILES['archivos']['name'][$i].".</p>"; /*CUIDADO: NO olvidar
             * el [$i] , el tercer corchete, si no, no funcionará.*/
            echo "<p>".$_FILES['archivos']['tmp_name'][$i].".</p>";
            echo "<p>"."Tama&ntilde;o ".$_FILES['archivos']['size'][$i]." B.</p>";
            /*INTERESANTE:Un archivo tiene 2 tamaños. El tamaño total que ocupa en disco
             * y el tamaño de todos los carácteres realmente escritos en ellos. (En disco
             * un archivo ocupa más desperdiciando cierto espacio -->Recordar lo de los
             * clusters y las palas que explicó Raúl en primero (Lo de los cabezales y
             * cómo funciona de verdad un disco duro)). $_FILES['archivos']['size']
             * muestra el tamaño REAL. (El más pequeño, lo que ocuparía si no se
             * desperdiciase nada).*/
            echo "<p>".$_FILES['archivos']['type'][$i].".</p>";
            echo "<br>";
        }
    }
}
?>