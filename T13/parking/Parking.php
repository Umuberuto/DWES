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
            
            //Normales:
            
            public function buscaVehiculo($num) {
                if ($num<count($this->vehiculos)){
                    return $this->vehiculos[$num];
                } else {
                    echo "<b>ERROR:</b> Est&aacute; intentando buscar un coche fuera de los l&iacute;mites del parking. <br>";
                    return null;
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
                            echo "Se ha aparcado el coche en el parking con &eacute;xito.<br>";
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
            
    }
    
?>