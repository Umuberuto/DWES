<?php
    function validarUsuario($string){ //Devuelve false si no recibe un string de usuario o si este NO es válido (Un usuario es válido si tiene entre 8 y 12 caracteres y NO empieza por algún número)
        $valido=false;
        if (!is_string($string)){
            return $valido;
        } else {
            if($string[0]=="0"){
                return $valido;
            } else {
                if(intval($string[0])!=0){
                    return $valido;
                }
                if( (strlen($string)<8) || (strlen($string)>12) ){
                    return $valido;
                }
                $valido=!$valido;
                return $valido;
            }
        }
    }
?>