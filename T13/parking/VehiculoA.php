<?php

    require_once './Vehiculo.php';
    
    class VehiculoA extends Vehiculo{
        
        //ATRIBUTOS
        
        private $meses;
        const tipoCliente="abonado", precio=80;
        
        //METODOS
        
            //Mágicos
            
            public function __construct($matricula, $marca, $meses=1) {
                parent::__construct($matricula, $marca);
                $this->meses=$meses;
            }
            
            public function __toString() {
                $string=parent::__toString();
                $string.="<b>Tipo cliente:</b> $this->tipoCliente.<br>";
                $string.="<b>Meses:</b> $this->meses.<br>";
                $string.="<b>Precio:</b> $this->precio euros al mes.<br>";
                return $string;
            }
            
            public function factura() {
                echo "L";
            }
    }

?>