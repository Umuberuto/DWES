<?php
    /*Este archivo imprimirá los divisores primos de una variable $num definida
    en el fichero desde el cual se incluye a este.*/
?>

<?php @include_once '../../bibliotecademisfunciones/funcionesNumeros.php';
    /*IMPORTANTE: Como este archivo tiene extensión inc NO se puede ejecutar
    directamente asique no haría falta incluir aquí esta ruta... Valdría con
    incluir la ruta desde el fichero que le incluya a divisores.inc?>*/
?>

<?php 
    if(isset($num)){
        if(is_numeric($num)){
            if($num<0)
                $num=$num * -1;
            if (($num==1)||($num==0)){ //El número 1 y el 0 NO son considerados primos.
                echo "<p>El n&uacute;mero $num NO tiene divisores primos. </p>";
            }else{
                if (es_primo($num)){
                    echo "<p>El &uacute;nico divisor primo de $num es: $num.</p>";
                } else{
                    echo "<p>Los divisores primos de $num son: </p>";
                    $maxi=$num/2;
                    for($i=2;$i<=$maxi;$i++){
                        if($num%$i==0){
                            if (es_primo($i))
                                echo "<p>$i </p>";
                        }    
                    }
                }
            }
        } else {
            echo "<p>Error: $num NO es un n&uacute;mero. </p>";
        }
    } else {
        echo "<p>Error: NO est&aacute; seteada la variable \$num. </p>";
    }
?>