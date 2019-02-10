<?php

    class Autor {
        private $nombre, $nacionalidad, $nacimiento, $muerte;
        
        public function __construct($nombre="Sin nombre", $nacionalidad="Sin nacionalidad", $nacimiento="Desconocido") {
            $this->nombre=$nombre;
            $this->nacionalidad=$nacionalidad;
            $this->nacimiento=$nacimiento;
            $this->muerte=0;
        }
        
        public function __get($atributo) {
            if(property_exists(__CLASS__, $atributo)){
                return $this->$atributo;
            } else {
                return null;
            }
        }
        
        public function __set($atributo, $valor) {
            if (property_exists(__CLASS__, $atributo)){
                switch ($atributo){
                    case "muerte":
                        echo "<p>Por favor, use el m&eacute;todo fallecer()</p>";
                        return false;
                    default :
                        $this->$atributo=$valor;
                        return true;
                }
            } else {
                return false;
            }
        }
        
        public function fallecer ($ano){
            if (is_numeric($ano)){
                $this->muerte=$ano;
                return true;
            } else {
                echo "<p>Por favor, pase un n&uacute;mero.</p>";
                return false;
            }
        }
        
        public function __toString() {
            $string="<b>Nombre:</b> $this->nombre.<br>";
            $string.="<b>Nacionalidad:</b> $this->nacionalidad.<br>";
            $string.="<b>A&ntilde;o de nacimiento:</b> $this->nacimiento.<br>";
            if ($this->muerte!=0){
                $string.="<b>A&ntilde;o de defunci&oacute;n:</b> $this->muerte.<br>";
            }
            return $string;
        }
    }

?>