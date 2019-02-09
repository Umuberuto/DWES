<?php
    require_once './Parking.php';
    require_once './VehiculoA.php';
    require_once './VehiculoH.php';
    //class Gestionar { //NO puedo poner esto porque en PHP NO existe un metodo "main".
    //Voy a crear una función mostrar datos porque se repite:
    function mostrarDatos($p,$p2){
        echo "----------------------------------------------------------------------";
        echo "<br>";
        echo "<b>DATOS PRIMER PARKING:</b><br>";
        echo "----------------------------------------------------------------------";
        echo "<br>";
        echo $p;
        echo "----------------------------------------------------------------------";
        echo "<br><br>";
        echo "----------------------------------------------------------------------";
        echo "<br>";
        echo "<b>DATOS SEGUNDO PARKING:</b><br>";
        echo "----------------------------------------------------------------------";
        echo "<br>";
        echo $p2;
        echo "----------------------------------------------------------------------";
        echo "<br><br>";
    }
    
    //Crear 2 objetos de tipo Parking (con nombre en mayúsculas y número de plazas.
    $parking1= new Parking ("CarPark",50);
    $parking2= new Parking("ultrapark");
    
    //Mostrar los datos
    mostrarDatos($parking1,$parking2);
    
    //A partir de ahora voy a poner directamente los datos porque PHP es distinto a JAVA...
    
    //Introducir el número de plazas de abonados y de hotel para cada parking
    $parking1->plazasAbonados=12;
    $parking1->plazasHotel=13;
    
    $parking2->plazasAbonados=25;
    $parking2->plazasHotel=25;
    
    //Mostrar los datos otra vez.
    mostrarDatos($parking1,$parking2);
    
    //Crear y aparcar distintos coches en distintos parking
    $ca1 = new VehiculoA("001H", "Citroen", 2);
    $ca2 = new VehiculoA("002Z", "Citroen", 4);
    $ca3 = new VehiculoA("003E", "Skoda", 6);
    $ca4 = new VehiculoA("002M", "Ford", 7);
    $ch1 = new VehiculoH("001L", "Citroen", 22);
    $ch2 = new VehiculoH("002K", "Citroen", 4);
    $ch3 = new VehiculoH("003I", "Skoda", 36);
    $ch4 = new VehiculoH("002P", "Ford", 272);
    $ch5 = new VehiculoH("002X", "Ford", 2);
    $ca1->aparca($parking1);
    $ca4->aparca($parking1);
    $ca2->aparca($parking2);
    $ca3->aparca($parking2);
    $ch5->aparca($parking2);
    $ch1->aparca($parking1);
    $ch2->aparca($parking1);
    $ch3->aparca($parking1);
    $ch4->aparca($parking1);
    
    //Recorrer el array de uno de los parking y mostrar todos los datos del parking, de los vehículos y de las facturas.
    echo "----------------------------------------------------------------------";
    echo "<br>";
    echo "<b>DATOS COMPLETOS DEL PRIMER PARKING:</b><br>";
    echo "----------------------------------------------------------------------";
    echo "<br>";
    echo $parking1;
    echo "<b>Plazas de abonados OCUPADAS:</b> ".$parking1->cochesAbonados().".<br>";
    echo "<b>Plazas de clientes de hotel OCUPADAS:</b> ".$parking1->cochesHotel().".<br>";
    echo "<b>Datos de los coches en el parking:</b><br>";
    foreach ($parking1->vehiculos as $clave=>$valor){
        if ($valor!=null){
            echo "**********************************************************************";
            echo "<br>";
            echo "<b>DATOS DEL COCHE EN LA POSICI&Oacute;N $clave:</b><br>";
            echo "**********************************************************************";
            echo "<br>";
            echo $valor;
            echo "**********************************************************************";
            echo "<br>";
            echo "<b style='color:red;'>FACTURA:</b><br>";
            echo "<p style='color:blue;'>";
            $valor->factura();
            echo "</p>";
        }
    }
    echo "----------------------------------------------------------------------";
    echo "<br><br>";
    
    //Mostrar las plazas ocupadas en cada parking:
    echo "<b>PLAZAS OCUPADAS DEL PRIMER PARKING: </b> $parking1->plazasOcupadas.<br>";
    echo "<b>PLAZAS OCUPADAS DEL SEGUNDO PARKING: </b> $parking2->plazasOcupadas.<br>";
    
?>