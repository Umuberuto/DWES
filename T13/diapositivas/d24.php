<?php 
    if($_SERVER['REQUEST_URI']=="/DWES/T13/diapositivas/d24.php"){
        include_once './Coche3.php';
    } else {
        include_once './diapositivas/Coche3.php';
    }
?>
<h4>
    A&ntilde;adir a la clase y al ejercicio: (Lo voy a hacer sobre Coche3)
    <ul>
        <li>una constante de clase</li>
        <li>una variable est&aacute;tica y un m&eacute;todo est&aacute;tico</li>
        <li>comprobar su funcionamiento</li>
        <li>comprobar el valor de alguna constante m&aacute;gica</li>
    </ul>
</h4>

<h5>
    Prueba constante de clase:
</h5>

<?php
    echo "<p>Los coches tienen ".Coche3::NUM_RUEDAS." ruedas.</p>";
?>

<h5>
    Prueba de variables est&aacute;ticas:
</h5>

<?php
    echo "<p> Se han creado ".Coche3::$cochescreados." coches.</p>";
    echo "<p>Ahora voy a crear otros coches.</p>";
    $coche1=new Coche3;
    $coche2=new Coche3;
    $coche3=new Coche3;
    $coche4=new Coche3;
    echo "<p> Se han creado ".Coche3::$cochescreados." coches.</p>";
?>

<h5>
    Prueba de m&eacute;todos est&aacute;ticos:
</h5>

<?php
    Coche3::rumrum();
?>

<h5>
    Prueba de valor de constante m&aacute;gica (__FILE__):
</h5>

<?php
    echo "<p><b>".__FILE__."</b></p>";
    //Nota: __FILE__ es CASI equivalente al $_SERVER['REQUEST_URI']
?>

<?php
    unset($coche1);
    unset($coche2);
    unset($coche3);
    unset($coche4);
?>