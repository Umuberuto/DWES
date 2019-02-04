<?php

    require_once './Vehiculo.php';
    
    class VehiculoH extends Vehiculo{
        
        //ATRIBUTOS
        
        private $dias, $descuento;
        const tipoCliente="hotel", precio=15;
        
        //METODOS
        
            //Mágicos
            
            public function __construct($matricula, $marca, $dias=1, $descuento=0) {
                parent::__construct($matricula, $marca);
                $this->dias=$dias;
                $this->descuento=$descuento;
            }
            
            public function __toString() {
                $string=parent::__toString();
                $string.="<b>Tipo cliente:</b> $this->tipoCliente.<br>";
                $string.="<b>D&iacute;as:</b> $this->dias.<br>";
                $string.="<b>Precio:</b> $this->precio euros al d&iacute;a.<br>";
                $string.="<b>Descuento:</b> $this->descuento &#37;.<br>";
                return $string;
            }
            
            public function factura() {
                echo "L";
            }
    }

?>