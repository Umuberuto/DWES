<?php 
    if($_SERVER['REQUEST_URI']=="/DWES/T13/diapositivas/d36.php"){
        include_once './Coche3.php';
    } else {
        include_once './diapositivas/Coche3.php';
    }
?>
<h4>
    A&ntilde;adir a la clase y al ejercicio: (Lo voy a hacer sobre Coche3)
    <ul>
        <li>Un m&eacute;todo __get()</li>
        <li>Un m&eacute;todo __set()</li>
        <li>Comprobar su funcionamiento</li>
    </ul>
</h4>

<?php $coch=new Coche3(); ?>

<h5>
    var_dump de $coch pre __set:
</h5>

<?php 
    var_dump($coch);
?>

<h5>
    Prueba __set():
</h5>

<?php $coch->marca="Citroen"; ?>

<h5>
    var_dump de $coch post __set:
</h5>

<?php var_dump($coch); ?>

<h5>
    Prueba __get():
</h5>

<?php echo $coch->marca; ?>

<?php unset($coch); ?>