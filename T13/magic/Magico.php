<?php

    final class Magico { //No quiero heredar de esta clase porque SOLO la voy a usar como ejemplos de métodos mágicos.
        //Atributos
        private $hechizo, $escuela, $criatura;
        
        //Métodos privados para __call y __callStatic
        private static function pronunciarHechizo($num=1){ //Imprimirá "EspectroPatronus el número de veces que le pasemos.
            for($i=$num;$i>0;$i--)
                echo "<p>EspectroPatronus</p>";
        }
        
        private function animalPatronus($booleano=true){
            if ($booleano)
                echo "<p>Mi patronus es: $this->criatura</p>";
            else
                echo "<p>NO conozco mi patronus</p>";
        }

        //Métodos mágicos
        public function __set($name, $value) { //Devuelve true si tiene éxito o false si falla.
            echo '<p>Activado el m&eacute;todo __set.</p>';
            if (property_exists(__CLASS__, $name)){
                $this->$name=$value;
                return true;
            } else {
                return false;
            }
        }
        
        public function __get($property) { //Devuelve la propiedad si existe y si no, devuelve null.
            echo '<p>Activado el m&eacute;todo __get.</p>';
            if (property_exists(__CLASS__, $property)){
                return $this->$property;
            } else {
                return null;
            }
        }
        
        public function __construct($hechizo="Sectumsempra", $escuela="Hogwarts", $criatura="Unicornio") {
            echo '<p>Activado el m&eacute;todo __construct.</p>';
            $this->hechizo=$hechizo;
            $this->escuela=$escuela;
            $this->criatura=$criatura;
        }
        
        public function __destruct() {
            echo '<p>Activado el m&eacute;todo __destruct.</p>';
        }
        
        public function __clone() {
            echo '<p>Activado el m&eacute;todo __clone.</p>';
        }
        
        public function __toString() {
            echo '<p>Activado el m&eacute;todo __toString.</p>';
            $string="<div>";
            $string.="<p>Hechizo:".$this->hechizo.".</p>";
            $string.="<p>Escuela: $this->escuela.</p>";
            $string.="<p>Criatura: $this->criatura.</p>";
            $string.="</div>";
            return $string;
        }
        
        public function __call($nombre, $param) { //Nota: $param es un array automaticamente por como funciona __call.
            echo '<p>Activado el m&eacute;todo __call.</p>';
            if (method_exists($this, $nombre)){
                if (!empty($param)){
                    $this->$nombre($param[0]);
                } else {
                    $this->$nombre();
                }
                return true;
            } else {
                echo "<p>No existe la funci&oacute;n a la que intentamos llamar.</p>";
                return false;
            }
        }
        
        public static function __callStatic($nombre,$param) {
            echo '<p>Activado el m&eacute;todo __callStatic.</p>';
            if (method_exists($this, $nombre)){
                if (!empty($param)){
                    $this::$nombre($param[0]);
                } else {
                    $this::$nombre();
                }
                return true;
            } else {
                echo "<p>No existe la funci&oacute;n a la que intentamos llamar.</p>";
                return false;
            }
        }
        
        public function __isset($propiedad) { //Es muy parecido al __get pero solo devuelve true y false.
            echo '<p>Activado el m&eacute;todo __isset.</p>';
            if(property_exists(__CLASS__, $propiedad)){
                return true;
            }
            return false;
        }
        
        public function __unset($propiedad) {
            echo '<p>Activado el m&eacute;todo __unset.</p>';
            if(property_exists(__CLASS__, $propiedad)){
                $this->$propiedad=null;
            }
        }
        
        public function __sleep() { //Este método sirve para liberar recursos para conexión a BD por ejemplo antes de serializar pero en este caso no se va a notar su funcionamiento.
            echo '<p>Activado el m&eacute;todo __sleep.</p>';
            return array("hechizo","escuela","criatura");
        }
        
        public function __wakeup() { //Este método sirve para "desliberar" recursos para "reconexión" a BD por ejemplo después de serializar pero en este caso no se va a notar su funcionamiento.
            echo '<p>Activado el m&eacute;todo __wakeup.</p>';
        }
        
        public function __invoke() {
            echo '<p>Activado el m&eacute;todo __invoke.</p>';
            echo "<p><b>NO soy una funci&oacute;n, soy un objeto.</b></p>";
        }
        
        /*public function __set_state($array) {
            echo '<p>Activado el m&eacute;todo __set_state.</p>';
            //$objetoadevolver=new Magico($array[0],$array[1],$array[2]);
            //var_dump($objetoadevolver);
            //return $objetoadevolver;
        } NO FUNCIONA*/
        
        
        //__autoload NO se define aquí, se define en el index.php o donde sea que vamos a hacer todo.
        
        public function __debugInfo() {
            echo '<p>Activado el m&eacute;todo __debugInfo.</p>';
            return "<p>Esta funci&oacute;n NO es recomendada a no ser que quieras dar formato al var_dump() porque la va a sustituir.</p>";
        }
    }

?>