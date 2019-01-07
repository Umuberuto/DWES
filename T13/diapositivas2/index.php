<?php
    if($_SERVER['REQUEST_URI']=="/DWES/T13/index.php"){
        include_once './diapositivas2/Usuario.php';
    } else {
        include_once './Usuario.php';
    }
?>
<h5>Pruebas de creaci&oacute;n de diferentes objetos con las clases Persona y/o Usuario:</h5>
<?php
    $p1= new Persona("Jaime", "Mora");
    $p2= new Persona("Sara", "De la Vega");
    $p3= new Persona("Melody", "Martínez");
    $u1= new Usuario("Juan", "Lila", "00J", time());
    $u2= new Usuario("Cece", "Rocosa", "01J", time());
    $u3= new Usuario("Pedro", "Bañón", "02J", time());
?>
<h5>Pruebas de llamadas a los m&eacute;todos existentes en las diapositivas anteriores:</h5>
<h5>A&ntilde;adir otros m&eacute;todos y/o variables tipo public, static y protected probando su funcionamiento:</h5>