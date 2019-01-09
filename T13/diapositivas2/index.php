<?php
    if($_SERVER['REQUEST_URI']=="/DWES/T13/index.php"){
        include_once './diapositivas2/Usuario.php';
    } else {
        include_once './Usuario.php';
    }
?>

<h3>FICHERO index.php DE LAS DIAPOSITIVAS 8 Y 9:</h3>

<h4>DIAPOSITIVA 8</h4>

<h5 style="color:green">
    PRUEBAS DE CREACI&Oacute;N DE DIFERENTES OBJETOS CON LAS CLASES PERSONA Y/O USUARIO:
</h5>

<?php
    $p1= new Persona("Jaime", "Mora");
    $p2= new Persona("Sara", "De la Vega");
    $p3= new Persona("Melody", "Martínez");
    $u1= new Usuario("Juan", "Lila", "00J", time());
    $u2= new Usuario("Cece", "Rocosa", "01J", time());
    $u3= new Usuario("Pedro", "Bañón", "02J", time());
?>

<h5 style="color:green">
    PRUEBAS DE LLAMADAS A LOS M&Eacute;TODOS EXISTENTES EN LAS DIAPOSITIVAS ANTERIORES:
</h5>

<h6 style="color:purple">__construct():</h6>
<p>Se llama al crear los objetos, asique ya los hemos probado.</p>

<h6 style="color:purple">echo (__toString()):</h6>
<h6>P1</h6>
<?php echo '<p>'.$p1.'</p>';?>
<h6>P2</h6>
<?php echo '<p>'.$p2.'</p>';?>
<h6>P3</h6>
<?php echo '<p>'.$p3.'</p>';?>
<h6>U1</h6>
<?php echo '<p>'.$u1.'</p>';?>
<h6>U2</h6>
<?php echo '<p>'.$u2.'</p>';?>
<h6>U3</h6>
<?php echo '<p>'.$u3.'</p>';?>

<h6 style="color:purple">echo (__get()):</h6>
<h6>P1 (Nombre)</h6>
<?php echo '<p>'.$p1->nombre.'</p>';?>
<h6>P2 (Apellido)</h6>
<?php echo '<p>'.$p2->apellido.'</p>';?>
<h6>P3 (Nombre y Apellido)</h6>
<?php echo '<p>'.$p3->nombre.'<br>'.$p3->apellido.'</p>';?>
<h6>Los usuarios no tienen definidos __get ni __set PROPIOS:</h6>
<?php echo $u1->id; //Con esta línea he comprobado que si NO está definido el __get llama al __get del padre automaticamente.?>

<h6 style="color:purple">propiedad = a valor (__set):</h6>
<h6>P1 (Antes de __set):</h6>
<?php echo '<p>'.$p1->nombre.'</p>';?>
<h6>P1 (Tras __set):</h6>
<?php
    $p1->nombre="Ra";
    echo '<p>'.$p1->nombre.'</p>';
?>
<h6>P2 (__set err&oacute;neo aposta)</h6>
<?php $p2->edad= 50; ?>

<h4>DIAPOSITIVA 9</h4>

<h5 style="color:green">
    CREA UN ARRAY EN EL FICHERO INDEX EN EL QUE PUEDAS INTRODUCIR PERSONAS Y USUARIOS:
</h5>
<?php $arra=array($p1,$p2,$p3,$u1,$u2,$u3); ?>
<p>ARRAY creado con &eacute;xito.</p>

<h5 style="color:green">
    DESPU&Eacute;S RECORRE ESE ARRAY Y MUESTRA SUS DATOS.
</h5>
<?php
    foreach ($arra as $valor){
        echo "<p>";
        if ($valor instanceof Usuario){
            echo "DATOS DE USUARIO-> ".$valor.".";
        } else {
            echo "DATOS DE PERSONA-> ".$valor.".";
        }
        echo "</p>";
    }
?>