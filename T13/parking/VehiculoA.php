<?php

    require_once './Vehiculo.php';
    
    class VehiculoA extends Vehiculo{
        
        //ATRIBUTOS
        
        private $meses, $descuento; //Descuento le añado yo, NO te lo pide.
        const tipoCliente="abonado", precio=80;
        
        //METODOS
        
            //Mágicos
            
            public function __construct($matricula, $marca, $meses=1) {
                parent::__construct($matricula, $marca);
                if ($meses==0){
                    $this->meses=1;
                } else {
                    $this->meses=$meses;
                }
                if($this->meses/3>=1){
                    $this->descuento=(floor($this->meses/3))*10;
                } else {
                    $this->descuento=0;
                }
            }
            
            public function __toString() {
                $string=parent::__toString();
                $string.="<b>Tipo cliente:</b>". VehiculoA::tipoCliente.".<br>";
                $string.="<b>Meses:</b> $this->meses.<br>";
                $string.="<b>Precio:</b> ".VehiculoA::precio." euros al mes.<br>";
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
                $factura.="<b>TIPO CLIENTE: </b> ".VehiculoA::tipoCliente.".<br>";
                $factura.="<b>TIEMPO ABONADO: </b> ";
                $factura.= $this->meses." meses.<br>";
                $factura.="<b>PRECIO DEL MES: </b> ".VehiculoA::precio." euros.<br>";
                $factura.="<b>IMPORTE";
                if ($this->descuento > 0){
                    $factura.=" CON DESCUENTO APLICADO";
                }
                $factura.=":</b> ";
                $factura.=(($this->meses*VehiculoA::precio)-($this->meses*VehiculoA::precio*$this->descuento/100));
                $factura.=" euros. <br>";
                echo $factura;
            }
            
            public function hayPlaza($parking) { //Devuelve true si hay plaza, si no hay plaza o no pasas un parking devuelve false.
                $abonados=0; $existealmenosunespaciolibre=false;
                if ($parking instanceof Parking){
                    foreach ($parking->vehiculos as $valor) {
                        if ($valor instanceof VehiculoA){
                            $abonados++;
                        }
                        if ($valor==null){
                            $existealmenosunespaciolibre=true;
                        }
                    }
                    
                    if ($abonados < ($parking->plazasAbonados) ){
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
                        $parking->aparcaVehiculo($this); //Nota: He creado este método porque te lo pedía el ejercicio pero antes NO lo había usado.
                        //Sin embargo, gracias a este ejercicio, me he dado cuenta que el método __set NO funciona bien con arrays. Se puede implementar la interface ArrayAcess o hacer un método "EXCLUSIVO" (Ej aparcaVehiculo($vehiculo)) para manejar arrays...
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }
    }

?>