<?php 
    /*Este archivo imprimirá el factorial de una variable $num definida en el
    fichero desde el cual se incluye a este.*/
?>

<?php @include_once '../../bibliotecademisfunciones/funcionesNumeros.php';
    /*IMPORTANTE: Como este archivo tiene extensión inc NO se puede ejecutar
    directamente asique no haría falta incluir aquí esta ruta... Valdría con
    incluir la ruta desde el fichero que le incluya a factorial.inc*/
?>

<?php
    if (isset($num)){
        if(is_numeric($num)){
            if($num<0){
                $num = $num * -1;
            }
            if (($num==0)||($num==1)){
                echo "<p>$num! = $num.</p>";
            } else {
                echo "<p>$num! = ";
                for ($i=$num;$i>0;$i--){
                    if($i>1){
                        echo "$i x ";
                    } else {
                        echo "$i = ";
                    }
                }
                echo factorial($num).". </p>";
            }
        } else {
            echo "<p>Error: $num NO es un n&uacute;mero. </p>";
        }
    } else {
        echo "<p>Error: NO est&aacute; seteada la variable \$num. </p>";
    }
?>