<?php 
    if($_SERVER['REQUEST_URI']=="/DWES/T13/diapositivas/d11.php"){
        include_once './Coche.php';
    } else {
        include_once './diapositivas/Coche.php';
    }
?>

<style>
    ul>p{
        font-weight: normal;
    }    
</style>

<h4>
    Hacer las siguientes instrucciones usando un solo programa:
</h4>

<h4>
    Crear una clase Coche con 3 propiedades: marca, modelo y pricio.
</h4>

<h4>
    Crear 2 objetos coche1 (sin usar par&eacute;ntesis en new) y coche2 (us&aacute;ndolos).
</h4>

<?php
    $coche1=new Coche;
    $coche2=new Coche();
?>

<h4>
    Sacar el contenido de los objetos mediante la funci&oacute;n var_dump($objeto);
</h4>

<?php
    echo "<p>".var_dump($coche1)."</p>";
    echo "<p>".var_dump($coche2)."</p>";
?>

<h4>
    Asignar valores a la marca y modelo de coche1 y al modelo y precio de coche2.
</h4>

<?php
    $coche1->marca="Renault"; /*IMPORTANTE: Cuando use el SET o el GET NO debo 
     * poner el $ en los atributos. Bueno en este caso NO he usado el GET o el
     * SET porque los atributos NO son private pero tampoco debo usar el $.*/
    $coche1->modelo="Clio";
    $coche2->modelo="Kerberus";
    $coche2->precio=120000;
?>

<h4>
    Volver a sacar el contenido de los objetos pero ahora para el primer coche con
    echo (mostrando una a una cada propiedad) y para el segundo coche de nuevo con
    la funci&oacute;n var_dump.
</h4>

<?php
    echo "<p>$coche1->marca</p>";
    echo "<p>$coche1->modelo</p>";
    echo "<p>".var_dump($coche2)."</p>";
?>

<h4>
    Probad a asignar de nuevo una de las propiedades al coche1 y comprobar si nos
    deja o no cambiarlas.
</h4>

<?php
     $coche1->modelo="XL8";
     echo "<p>$coche1->modelo</p>";
     echo "<p>Se PUEDE asignar una propiedad de nuevo.</p>";
?>

<h4>
    Ahora a&ntilde;adir los dos m&eacute;todos siguientes a la clase haciendo en ellos
    uso del operador this:
    <ul>
        <li>
            Uno se llamar&aacute; precioiva, no tendr&aacute; par&aacute;metros y
            calcular&aacute; y mostrar&aacute; el precio del coche m&aacute; el 
            21% del IVA.
        </li>
        <li>
            Otro se llamar&aacute; descuentos y tendr&aacute; un par de par&aacute;metros
            ($a=3, $b=5) de tal forma que nos calcule y muestre el valor del precio del
            coche una vez aplicados esos descuentos.
        </li>
    </ul>
</h4>

<h4>
    Probar con el coche1 el m&eacute;todo precioiva.
</h4>

<?php $coche1->precioIVA();?>

<h4>
    Probar para el coche2 el m&eacute;todo descuentos pero llam&aacute;ndolo de 3
    formas diferentes:
    <ul>
        
        <li>
            Sin pasarle par&aacute;metros.
        </li>
        <?php $coche2->descuentos();?>
        
        <li>
            Pas&aacute;ndole solo un valor.
        </li>
        <?php $coche2->descuentos(10);?>
        
        <li>
            Pas&aacute;ndole dos valores.
        </li>
        <?php $coche2->descuentos(20, 30);?>
    </ul>
    &iquest;Qu&eacute; ocurre?<br>
    NADA raro, si no paso los par&aacute;metros, utiliza el valor de los par&aacute;metros
    por defecto.
</h4>