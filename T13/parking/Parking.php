<?php

    class Parking {
        
        //ATRIBUTOS
        
        private $nombre, $plazasTotal, $plazasAbonados=0, $plazasHotel=0, $plazasOcupadas=0, $vehiculos=array();
        
        //METODOS
        
            //Mágicos
        
            public function __construct($nombre,$plazasTotal=100) {
                $this->nombre=  strtoupper($nombre);
                
                if ($plazasTotal>100){
                    $this->plazasTotal=100;
                } else {
                    $this->plazasTotal=$plazasTotal;
                }
                
                for ($i=0; $i<$this->plazasTotal; $i++){
                    $this->vehiculos[$i]=null;
                }
            }
            
            public function __get($propiedad) {
                if (property_exists(__CLASS__, $propiedad)){
                    return $this->$propiedad;
                } else {
                    return null;
                }
            }
            
            public function __set($propiedad, $valor) {
                if (property_exists(__CLASS__, $propiedad)){
                    switch ($propiedad){
                        case "plazasAbonados":
                            if ($valor<=($this->plazasTotal-$this->plazasHotel)){
                                $this->plazasAbonados=$valor;
                            } else {
                                $this->plazasAbonados=  $this->plazasTotal-$this->plazasHotel;
                            } break;
                        case "plazasHotel":
                            if ($valor<=($this->plazasTotal-$this->plazasAbonados)){
                                $this->plazasHotel=$valor;
                            } else {
                                $this->plazasHotel=  $this->plazasTotal-$this->plazasAbonados;
                            } break;
                        default :
                            $this->$propiedad=$valor;
                    }
                } else {
                    echo "<b>ERROR:</b> No se puede setear una propiedad que no existe.<br>";
                }
            }
            
            public function __toString() {
                $string="";
                $string.="<b>Nombre del parking:</b> $this->nombre.<br>";
                $string.="<b>Plazas totales:</b> $this->plazasTotal.<br>";
                $string.="<b>Plazas reservadas para abonados:</b> $this->plazasAbonados.<br>";
                $string.="<b>Plazas reservadas para clientes de hotel:</b> $this->plazasHotel.<br>";
                $string.="<b>Plazas ocupadas:</b> $this->plazasOcupadas.<br>";
                return $string;
            }

            //No mágicos (Normales)
            
            public function buscaVehiculo($num) {
                if ($num<count($this->vehiculos)){
                    return $this->vehiculos[$num];
                } else {
                    echo "<b>ERROR:</b> Est&aacute; intentando buscar un coche fuera de los l&iacute;mites del parking. <br>";
                    return null;
                }
            }
            
            public function sacaFactura($vehiculo){ //Devuelve true si tiene éxito y false si fracasa.
                if ($vehiculo instanceof Vehiculo){
                    foreach ($this->vehiculos as $valor) {
                        if ($valor == $vehiculo){
                            $vehiculo->factura();
                            return true;
                        }
                    }
                } else {
                    echo "<b>ERROR:</b> No se puede sacar la factura de algo que NO sea un veh&iacute;culo.<br>";
                    return false;
                }
            }

            public function cochesAbonados() {
                $abonados=0;
                foreach ($this->vehiculos as $valor) {
                    if ($valor instanceof VehiculoA){
                        $abonados++;
                    }
                }
                return $abonados;
            }
            
            public function cochesHotel() {
                $hotel=0;
                foreach ($this->vehiculos as $valor) {
                    if ($valor instanceof VehiculoH){
                        $hotel++;
                    } 
                }
                return $hotel;
            }
            
            public function aparcaVehiculo($vehiculo) { //Devuelve true si tiene éxito y false si no.
                if ($vehiculo instanceof Vehiculo){
                    foreach ($this->vehiculos as $clave=> $valor) {
                        if ($valor==null){
                            $this->vehiculos[$clave]=$vehiculo;
                            $this->plazasOcupadas++;
                            return true;
                        }
                    }
                    echo '<b>ERROR:</b> No hay espacio en el parking para aparcar un coche m&aacute;s.<br>';
                    return false;
                } else {
                    echo '<b>ERROR:</b> Est&aacute; intentando aparcar algo que NO es un coche.<br>';
                    return false;
                }
            }
            
            public function muestraVehiculos (){ //Va a ser un método que devuelve e imprime el string a la vez.
                $string="";
                for ($i=0; $i<count($this->vehiculos); $i++){
                    $string.="<b><u>COCHE APARCADO EN LA POSICI&Oacute;N $i:</u></b><br>";
                    $string.=$this->vehiculos[$i]->toString();
                }
                echo $string;
                return $string;
            }
            
    }
    
?>