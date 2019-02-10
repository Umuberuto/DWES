<?php

    class Libro {
        private $isbn, $titulo, $prestado, $autor;
        
        public function __construct($isbn="Desconocido", $titulo="Desconocido", $autor=null) {
            $this->isbn=$isbn;
            $this->titulo=$titulo;
            $this->prestado=false;
            if ($autor instanceof Autor){
                $this->autor=$autor;
            } else {
                $this->autor=null;
            }
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
                    case "prestado":
                        echo "<p>Por favor, use el m&eacute;todo prestarLibro() o devolverLibro().</p>";
                        return false;
                    default :
                        $this->$atributo=$valor;
                        return true;
                }
            } else {
                return false;
            }
        }
        
        public function prestarLibro() {
            if ($this->prestado){
                echo "<b>NO puede ser prestado porque YA ha sido prestado.</b><br>";
                return false;
            } else {
                $this->prestado=true;
                return true;
            }
        }
        
        public function devolverLibro() {
            if ($this->prestado){
                $this->prestado=false;
                return true;
            } else {
                echo "<b>NO puede ser devuelto porque NO ha sido prestado.</b><br>";
                return false;
                
            }
        }
        
        public function __toString() {
            $string="<b>ISBN:</b> $this->isbn.<br>";
            $string.="<b>T&iacute;tulo:</b> $this->titulo.<br>";
            $string.="<b>&iquest;Est&aacute; prestado?:</b>";
            if ($this->prestado){
                $string.=" S&iacute;";
            } else {
                $string.=" No";
            }
            $string.=".<br>";
            if ($this->autor!=null){
                $string.="<b>AUTOR:</b> <br>$this->autor<br>";
            } else {
                $string.="<b>AUTOR:</b> Desconocido.<br>";
            }
            return $string;
        }
    }

?>