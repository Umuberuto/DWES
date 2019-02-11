<?php
    require_once './Empleado.php';
    $empleado1=new Empleado();
    $empleado2=new Empleado();
    $empleado3=new Empleado();
    echo $empleado1."<br>";
    $empleado1->asigNombre("Pepe");
    echo $empleado1->toStringPadre()."<br>";
    echo $empleado3."<br>";
    unset($empleado3);
    echo $empleado1->toStringPadre()."<br>";
    $empleado1->tieneLibro("Harry Potter");
    echo $empleado1."<br>";
    $empleado1->leerLibro();
    echo $empleado1."<br>";
    $empleado1->ocupacion_principal();
?>