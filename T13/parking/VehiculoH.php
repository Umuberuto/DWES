<?php

    require_once './Vehiculo.php';
    
    class VehiculoH extends Vehiculo{
        
        //ATRIBUTOS
        
        private $dias, $descuento;
        const tipoCliente="hotel", precio=15;
        
        //METODOS
        
            //Mágicos
            
            public function __construct($matricula, $marca, $dias=1, $descuento=0) {
                //Voy a usar una variable auxiliar (diasaux) para calcular el descuento...
                parent::__construct($matricula, $marca);
                $this->dias=$dias;
                $diasaux=  $this->dias;
                $this->descuento=$descuento;
                if($this->dias-90>=0){
                    $diasaux-=90;
                    while ($diasaux>=0){
                        $this->descuento +=10;
                        $diasaux-=90;
                    }
                }
            }
            
            public function __toString() {
                $string=parent::__toString();
                $string.="<b>Tipo cliente:</b> ".  VehiculoH::tipoCliente.".<br>";
                $string.="<b>D&iacute;as:</b> $this->dias.<br>";
                $string.="<b>Precio:</b> ".  VehiculoH::precio." euros al d&iacute;a.<br>";
                if ($this->descuento>0) //Porque queda feo mostrar Descuento: 0%, para eso NO lo muestro.
                    $string.="<b>Descuento:</b> $this->descuento &#37;.<br>";
                return $string;
            }
            
            public function __get($propiedad){
                if(property_exists(__CLASS__, $propiedad)){
                    return $this->$propiedad;
                } else {
                    return parent::__get($propiedad);
                }
            }
            
            //No mágicos (Normales)
            
            public function factura() {
                $factura="";
                $factura.="<b>MATR&Iacute;CULA: </b> $this->matricula.<br>";
                $factura.="<b>TIPO CLIENTE: </b> ".VehiculoH::tipoCliente.".<br>";
                $factura.="<b>TIEMPO: </b> $this->dias d&iacute;as.<br>";
                $factura.="<b>PRECIO DEL D&Iacute;A: </b> ".VehiculoH::precio." euros.<br>";
                $factura.="<b>IMPORTE";
                if ($this->descuento > 0){
                    $factura.=" CON DESCUENTO APLICADO";
                }
                $factura.=":</b> ";
                $factura.=(($this->dias*VehiculoH::precio)-($this->dias*VehiculoH::precio*$this->descuento/100));
                $factura.=" euros. <br>";
                echo $factura;
            }
            
            public function hayPlaza($parking) { //Devuelve true si hay plaza, si no hay plaza o no pasas un parking devuelve false.
                $hotel=0; $existealmenosunespaciolibre=false;
                if ($parking instanceof Parking){
                    foreach ($parking->vehiculos as $valor) {
                        if ($valor instanceof VehiculoH){
                            $hotel++;
                        }
                        if ($valor==null){
                            $existealmenosunespaciolibre=true;
                        }
                    }
                    
                    if ($hotel < ($parking->plazasHotel) ){
                        if ($existealmenosunespaciolibre) {
                            return true;
                        } else {
                            return false;
                        }
                    } else {
                        return false;
                    }
                    
                } else {
                    return false;
                }
            }
            
            public function aparca($parking){ //Devuelve true si tiene éxito y false si no. 
                if ($parking instanceof Parking){
                    if ($this->hayPlaza($parking)){
                        $parking->aparcaVehiculo($this);
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }
    }

?>