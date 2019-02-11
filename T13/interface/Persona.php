<?php

    abstract class Persona {
        private $nombre, $fechaNacimiento; 
        private static $numPersonas=0;

        public function __construct($nombre="Sin nombre") {
            $this->nombre=$nombre;
            self::$numPersonas++;
        }
        
        public function __destruct() {
            self::$numPersonas--;
        }
        
        public function __toString() {
            $string="<b>Nombre:</b> $this->nombre.<br>";
            $string.="<b>N&uacute;mero de personas:</b> ".self::$numPersonas.".<br>";
            return $string;
        }
        
        public final function asigNombre($nombre){ //Entiendo que cuando dice que NO puedan heredar las clases hijas, se refiere a que NO la pueda modificar... (PREGUNTAR a Conchi). Eso o si lo que quiere es que lo pongamos PRIVATE y casque el programa...
            $this->nombre=$nombre;
        }
        
        public final function devolverPersonas(){
            return self::$numPersonas;
        }
        
        public function getNombre(){
            return $this->nombre;
        }
        
        public function getNacimiento(){ //Este no hacia falta pero le he hecho por hacer más completo el toString de Empleado.
            return $this->fechaNacimiento;
        }

        public abstract function ocupacion_principal();
    }

?>