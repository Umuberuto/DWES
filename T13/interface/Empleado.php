<?php
    
    require_once './Persona.php';
    require_once './Leer.php';
    
    class Empleado extends Persona implements Leer {
        private $id, $libro, $salario;
        private static $empleados=0;
        
        public function __construct($nombre = "Sin nombre",$salario=1000) {
            parent::__construct($nombre);
            $this->salario=$salario;
            self::$empleados++;
            $this->id=  self::$empleados;
        }
        
        public function __toString() {
            $string="<b>Nombre de la clase: </b>".__CLASS__.".<br>";
            $string.="<b>Nombre:</b> ".parent::getNombre().".<br>";
            $string.="<b>Id:</b> $this->id<br>";
            if (!empty(parent::getNacimiento()))
                $string.="<b>Fecha de nacimiento:</b> ".parent::getNacimiento().".<br>";
            $string.="<b>Salario:</b> $this->salario.<br>";
            if (!empty($this->libro)){
                $string.="<b>Libro que se est&aacute; leyendo actualmente:</b> $this->libro.<br>";
            }
            return $string;
        }
        
        public function toStringPadre(){
            return parent::__toString();
        }
        
        public function ocupacion_principal() {
            echo "<b>Estoy trabajando...</b>";
        }
        
        public function tieneLibro($titulo) {
            $this->libro=$titulo;
        }
        
        public function leerLibro() { //Entiendo que tieneLibro() le da el libro a leer y este método (leerLibro) lo que hace es vaciar el libro porque YA lo ha leído.
            $this->libro="";
        }
    }

?>