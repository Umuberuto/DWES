<?php
function crearArrayInt($n,$min,$max){ //Método que crea un array de tamaño n con números aleatorios cuyo intervalo (mínimo y máximo) se indica como parámetro.
    $array=array();
    for ($i=0;$i<$n;$i++){
        $array[$i]=rand($min,$max);
    }
    return $array;
}

function buscarValorMinimo($array){ //Nos devuelve el mínimo valor del array que le pasemos como parámetro.
    $min=PHP_INT_MAX;
    foreach ($array as $valor){
        if ($valor<$min)
            $min=$valor;
    }
    return $min;
} 

function buscarValorMaximo($array){ //Nos devuelve el máximo valor del array que le pasemos como parámetro.
    $max=$array[0];
    foreach ($array as $valor){
        if ($valor>$max)
            $max=$valor;
    }
    return $max;
}

function mediaArray($array){ //Devuelve la media del array que se pasa como parámetro.
    $suma=0;
    foreach ($array as $valor){
        $suma+=$valor;
    }
    return $suma/count($array);
}

function estaEnArray($array, $num){ //Nos dice si un numero esta o no en el array y en que posicion.
    $arraydev=array(false,"No se encuentra $num en el array.");
    foreach ($array as $clave=>$valor){
        if($valor==$num){
            $arraydev[0]=true;
            $arraydev[1]=$clave;
            break;
        }
    }
    return $arraydev;
}

function darVuelta(&$array){ //Le da la vuelta a un array.
    $aux=array();
    for($i=0, $j=count($array)-1; $i<count($array); $i++, $j--){
        $aux[$j]=$array[$i];
    }
    for($k=0;$k<count($array);$k++){
        $array[$k]=$aux[$k];
    }
    unset($aux);
}

function cambiarPosicionesD(&$array, $n){ //Mueve y rota n posiciones a la derecha los números de un array
    if(!is_numeric($n))
        return false; //Voy a devolver false si no se intenta desplazar un número.
    if($n<0)
        return false; //No voy a permitir números negativos. Para eso exite la función cambiarPosicionesI().
    $n%=count($array); //Esto son las posiciones que se van a mover realmente ya que si te dicen que 6 elementos se muevan 30 veces (por ejemplo) no se moverán nada...
    if ($n==0)
        return false; //Voy a devolver false si el array no se mueve.
    $lim=count($array)-$n; //Límite de veces que me voy a "poder mover" sin salirme del array
    $arrayaux=array();
    foreach ($array as $valor){
        $arrayaux[]=$valor;
    }
    $i=0;
    for(;$i<$lim;$i++){
        $array[$i+$n]=$arrayaux[$i];
    }
    for($j=0;$j<$n;$j++,$i++){
        $array[$j]=$arrayaux[$i];
    }
    unset($n);
    unset($lim);
    unset($arrayaux);
    return true; //Si ha llegado hasta aquí se entiende que la función se ha ejecutado con éxito.
}

function cambiarPosicionesI(&$array, $n){ //Mueve y rota n posiciones a la izquierda los números de un array
    if(!is_numeric($n))
        return false; //Voy a devolver false si no se intenta desplazar un número.
    if($n<0)
        return false; //No voy a permitir números negativos. Para eso exite la función cambiarPosicionesI().
    $n%=count($array); //Esto son las posiciones que se van a mover realmente ya que si te dicen que 6 elementos se muevan 30 veces (por ejemplo) no se moverán nada...
    if ($n==0)
        return false; //Voy a devolver false si el array no se mueve.
    $lim=count($array)-$n; //Límite de veces que me voy a "poder mover" sin salirme del array
    $arrayaux=array();
    foreach ($array as $valor){
        $arrayaux[]=$valor;
    }
    $j=count($array)-1;
    for($i=count($array)-1;$i>=$n;$i--,$j--){
        $array[$i-$n]=$arrayaux[$j];
    }
    for($i=  count($array)-1;$i>=$lim;$i--,$j--){
        $array[$i]=$arrayaux[$j];
    }
    unset($n);
    unset($arrayaux);
    return true; //Si ha llegado hasta aquí se entiende que la función se ha ejecutado con éxito.
}
?>