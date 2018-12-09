<?php
    class Coche {
        //Atributos
        var $marca;
        var $modelo;
        var $precio;
        
        //Funciones
        
        function precioIVA (){
            echo "<p>Precio con IVA: ".($this->precio * 1.21)."</p>";
        }
        
        function descuentos($a=3,$b=5){
            if (isset($a)){
                /*IMPORTANTE:
                 * echo "<p> Precio con descuento de $a : ".$this->precio - $this->precio * ($a/100).".</p>";
                 * NO funcionaba por la falta del paréntesis. Tener MUCHO cuidado.*/
                echo "<p> Precio con descuento de $a% : ".($this->precio - $this->precio * ($a/100)).".</p>";
            }
            if (isset($b)){
                echo "<p> Precio con descuento de $a% y $b% : ".($this->precio - ($this->precio * ($a/100)) - ($this->precio * ($b/100)) ).".</p>";
            }
        }

        function __set($atributo, $valor) {
            if (property_exists(__CLASS__, $atributo)){
                $this->$atributo=$valor;
            } else {
                echo "<p><b>ERROR:</b> No existe el atributo. $atributo</p>";
            }
        }
        
        function __get($atributo) {
            if (property_exists(__CLASS__, $atributo)){
                return $this->$atributo;
            }
            return NULL;
        }
        
    }
?>