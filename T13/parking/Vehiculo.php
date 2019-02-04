<?php

    abstract class Vehiculo {
        
        //ATRIBUTOS
        
        private $matricula, $marca;
        
        //METODOS
        
            //Mágicos
            
            public function __construct($matricula, $marca) {
                $this->matricula=$matricula;
                $this->marca=$marca;
            }
            
            public function __get($atributo){
                if (property_exists(__CLASS__, $atributo)){
                    return $this->$atributo;
                } else {
                    return null;
                }
            }
            
            public function __set($atributo, $valor) { //Devuelve true si tiene éxito o false si falla.
                if(property_exists(__CLASS__, $atributo)){
                    $this->$atributo=$valor;
                    return true;
                } else {
                    return false;
                }
            }
            
            public function __toString() {
                $string="<b>Matr&iacute;cula:</b> $this->matricula.<br>";
                $string.="<b>Marca:</b> $this->marca.<br>";
                return $string;
            }
            
            //No mágicos (Normales)
            
            public abstract function factura();
            
    }

?>