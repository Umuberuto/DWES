<?php

    function es_primo($num) { //Devuelve true si el número es primo, false si no lo es y null si no es un valor numérico. Si el número es negativo, se transforma en positivo para hacer la comprobación. 
        $bool = true;
        if (is_numeric($num)) {
            if ($num < 0)
                $num = $num * -1;
            if (($num == 1) || ($num == 0)) { //El número 1 y el número 0 NO se consideran primos.
                $bool = !$bool;
                return $bool;
            }
            if ($num == 2)
                return $bool;
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $bool = !$bool;
                    return $bool;
                }
            }
            return $bool;
        }
        else
            return null;
    }

    function factorial($num){ //Devuelve el factorial de un número o null si se pasa una variable NO numérica.
        if(is_numeric($num)){
            if ($num<0){
                $num= $num * -1;
            }
            if (($num == 0) || ($num==1))
                return 1;
            else {
                return $num * factorial($num - 1);
            }
        } else {
            return null;
        }     
    }
    
    function sumar ($num1, $num2){ //Devuelve la suma de 2 números pasados o null si NO se pasan 2 números
    if (isset($num1) && isset($num2)){
        if(is_numeric($num1) && is_numeric($num2)){
            return $num1+$num2;
        } else return null;
    } else return null;    
    }
    
    function restar ($num1, $num2){ //Devuelve la resta de 2 números pasados o null si NO se pasan 2 números
    if (isset($num1) && isset($num2)){
        if(is_numeric($num1) && is_numeric($num2)){
            return $num1-$num2;
        } else return null;
    } else return null;    
    }
    
    function multiplicar ($num1, $num2){ //Devuelve la multiplicación de 2 números pasados o null si NO se pasan 2 números
    if (isset($num1) && isset($num2)){
        if(is_numeric($num1) && is_numeric($num2)){
            return $num1*$num2;
        } else return null;
    } else return null;    
    }
    
    function dividir ($num1, $num2){ //Devuelve la división de 2 números pasados o null si NO se pasan 2 números o el divisor es 0
    if (isset($num1) && isset($num2)){
        if(is_numeric($num1) && is_numeric($num2) && $num2!=0){
            return $num1/$num2;
        } else return null;
    } else return null;    
    }
    
?>