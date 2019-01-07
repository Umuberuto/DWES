<?php

    class Persona {
        
        //Atributos
        private $nombre;
        private $apellido;
        
        //Funciones mágicas
        public function __construct($nombre,$apellido) {
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            /*IMPORTANTE: Esto <!---
             *                      if (__CLASS__=="Persona")
             *                          echo "<p>Persona creada con &eacute;xito.</p>";
             *                  -->
             * NO me sirve porque __CLASS__ va a cambiar automaticamente a "Persona":
             * 
             *TAMPOCO me sirve el instanceof porque instanceof devuelve TRUE si es
             * de la MISMA clase O de alguna clase HIJA
             */
            if (get_class($this) == "Persona"){
                echo "<p>Persona creada con &eacute;xito.</p>";
            }
        }

        public function __toString() {
            return $this->nombre." ".$this->apellido;
        }

        public function __get($propiedad) {
            if (property_exists(__CLASS__, $propiedad)){
                return $this->$propiedad;
            } else {
                return NULL;
            }
        }

        public function __set($propiedad, $valor) {
            if(property_exists(__CLASS__, $propiedad)){
                $this->$propiedad=$valor;
            } else {
                echo "<p>NO existe esa propiedad</p>";
                return false;
            }
        }
        
    }

?>