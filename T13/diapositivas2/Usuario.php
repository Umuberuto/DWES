<?php

    if($_SERVER['REQUEST_URI']=="/DWES/T13/index.php"){
        require_once './diapositivas2/Persona.php';
    } else {
        require_once './Persona.php';
    }
    
    class Usuario extends Persona{
        //Atributos
        /*Hereda:
         * $nombre
         * $apellido
        */
        private $id;
        private $fecha_ingreso;
        
        //Funciones mágicas
        public function __construct($nombre, $apellido,$id,$fecha_ingreso) {
            parent::__construct($nombre, $apellido);
            $this->id=$id;
            $this->fecha_ingreso=$fecha_ingreso;
            if (get_class($this) == "Usuario"){
                echo "<p>Usuario creado con &eacute;xito.</p>";
            }
        }
        
        public function __toString() {
            return $this->id.": ".parent::__toString();
        }
    }

?>