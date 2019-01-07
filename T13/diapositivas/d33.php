<?php 
    if($_SERVER['REQUEST_URI']=="/DWES/T13/diapositivas/d33.php"){
        include_once './Coche3.php';
    } else {
        include_once './diapositivas/Coche3.php';
    }
?>
<h4>
    A&ntilde;adir a la clase y al ejercicio: (Lo voy a hacer sobre Coche3)
    <ul>
        <li>Un m&eacute;todo constructor</li>
        <li>Un m&eacute;todo destructor</li>
        <li>Comprobar su funcionamiento</li>
    </ul>
</h4>

<h5>
    Prueba usar constructor:
</h5>

<?php $coche=new Coche3; ?>

<h5>
    Prueba usar destructor:
</h5>

<?php unset($coche); ?>