<?php
    class Coche3 {
        //Atributos
        private $marca; //IMPORTANTE: Preguntar si debo igualarlos a null en esta línea o si debo hacerlo en el constructor. (De momento lo he hecho en el constructor).
        private $modelo;
        private $precio;
        
        //Funciones
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
        
        function __construct($marca=null,$modelo=NULL,$precio=NULL){ /*Este método ES
         * constructor porque NO he creado el __construct*/
        /*IMPORTANTE: Si NO pongo el =NULL y no paso los parámetros sale el Warning
         * de Missing argument y el notice undefine variable x...*/
        //INTERESANTE: Null es case INSENSITIVE (Da igual ponerlo en mayus o minus).    
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->precio=$precio;
        }
        
        /*function Coche2($marca,$modelo,$precio){...} NO EXISTE sobrecarga, esta
          función da error*/
        
        function precioIVA (){
            echo "<p>Precio con IVA: ".($this->precio * 1.21)."</p>";
        }
        
        function descuentos($a=3,$b=5){
            if (isset($a)){
                /*IMPORTANTE:
                 * echo "<p> Precio con descuento de $a : ".$this->precio - 
                 * $this->precio * ($a/100).".</p>";
                 * NO funcionaba por la falta del paréntesis. Tener MUCHO cuidado.*/
                echo "<p> Precio con descuento de $a% : ".($this->precio - 
                        $this->precio * ($a/100)).".</p>";
            }
            if (isset($b)){
                echo "<p> Precio con descuento de $a% y $b% : ".($this->precio - 
                        ($this->precio * ($a/100)) - ($this->precio * ($b/100)) ).".</p>";
            }
        }
        
        function tiempoMin (){ //Esta función tiene como objetivo probar los arrays escalares.
            $arrayescalar= array(rand(2, 6),rand(2, 6),rand(2, 6),rand(2, 6));
            $min=$arrayescalar[0];
            foreach ($arrayescalar as $valor){
                if ($valor<$min){
                    $min=$valor;
                }
            }
            echo "<p>El tiempo m&iacute;nimo que han tardado en recorrer el circuito
                han sido $min minutos.</p>";
        }
        
        function correr(){ //Esta función tiene como objetivo probar los arrays asociativos.
            $arrayasocia=array(
                "X0"=>array("Nombre"=>"Paco", "Tiempo"=>  rand(4, 10)),
                "X1"=>array("Nombre"=>"Paco", "Tiempo"=>  rand(5, 9)),
                "X2"=>array("Nombre"=>"Mary", "Tiempo"=>  rand(4, 10)),
                "X3"=>array("Nombre"=>"Any", "Tiempo"=>  rand(6, 8)),
                "X4"=>array("Nombre"=>"Luis", "Tiempo"=>  7),
                "X5"=>array("Nombre"=>"Lis", "Tiempo"=>  rand(3, 8)),
            );
            $min["X0"]=$arrayasocia["X0"];
            foreach ($arrayasocia as $clave=>$valor){
                foreach ($min as $va){
                    if ($valor["Tiempo"]==$va["Tiempo"]){
                        $min[$clave]=$valor;
                    } elseif ($valor["Tiempo"]<$va["Tiempo"]) {
                        $min=array();
                        $min[$clave]=$valor;
                    }
                    break;
                }
            }
            echo "<p style='color:purple;'>RESULTADOS de la carrera (Para comprobar
                que el m&eacute;todo funciona BIEN):<br>";
                var_dump($arrayasocia);
            echo "</p>";
            if (count($min)==1){
                reset($min); /*IMPORTANTE: Si NO pongo este reset, el key($min)
                 * que uso dentro de este if (count($min)==1){ SOLO funciona
                 * si la que gana (la que tarda menos) es Lis (Porque tiene la
                 * última posición ergo NO avanza el puntero interno del array
                 * $min ergo devuelve bien la key). TODOS los demás hacen avanzar
                 * el puntero interno de $min, por eso key($min) devuelve NULL y
                 * me sale el UNDEFINED INDEX ERROR porque NO EXISTE $min[null].
                 */
                echo "<p>El piloto que menos ha tardado en recorrer el circuito
                    ha sido el piloto cuyo c&oacute;digo es: <b style='color:blue'>";
                echo key($min);
                echo "</b>. Su nombre es <b style='color:blue'>";
                echo $min[key($min)]["Nombre"]."</b>";
                echo " y ha tardado <b style='color:blue'>".$min[key($min)]["Tiempo"];
                echo " minutos</b> en recorrer el circuito.</p>";
            } else {
                echo "<p>Los pilotos que menos han tardado en recorrer el circuito ";
                echo "han tardado <b style='color:blue'>".$min[key($min)]["Tiempo"];
                echo " minutos</b>, han sido: <br>";
                foreach ($min as $clave=>$valor){
                    echo "Piloto con c&oacute;digo <b style='color:blue'>$clave : ";
                    echo $valor["Nombre"]."</b>.<br>";
                }
                echo "</p>";
            }
        }
        
    }
?>