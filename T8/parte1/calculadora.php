<?php @include_once '../../bibliotecademisfunciones/funcionesNumeros.php'; ?>
<?php
    //Este fichero va a usar los datos recogidos de un formulario para simular el comportamiento de una calculadora. Si invocas a este fichero sin pasar por el formulario, te envía a él para que estés obligado a introducir los datos.
    if ( ( !isset ($_POST['num1']) || ($_POST['num1']=="") ) || ( !isset ($_POST['num2']) || ($_POST['num2']=="") ) ) { //No puedo usar la función empty() porque lamentablemente devuelve true al pasar el número 0 por eso no podría hacer operaciones con 0.
        header("Location:calculadora.html");
    }else{
        switch ($_POST['op']){
            case "+":
                echo "La suma de {$_POST['num1']} y {$_POST['num2']} es: ";
                echo sumar($_POST['num1'], $_POST['num2'])."<br>";
                echo "<a href='calculadora.html'>Volver a la calculadora</a>";
                break;
            case "-":
                echo "La resta de {$_POST['num1']} y {$_POST['num2']} es: ";
                echo restar($_POST['num1'], $_POST['num2'])."<br>";
                echo "<a href='calculadora.html'>Volver a la calculadora</a>";
                break;
            case "*":
                echo "La multiplicaci&oacute;n de {$_POST['num1']} y {$_POST['num2']} es: ";
                echo multiplicar($_POST['num1'], $_POST['num2'])."<br>";
                echo "<a href='calculadora.html'>Volver a la calculadora</a>";
                break;
            case "/":
                if (($divi=dividir($_POST['num1'], $_POST['num2']))!=null){
                    echo "La divisi&oacute;n de {$_POST['num1']} y {$_POST['num2']} es: $divi";
                } else {
                    echo "ERROR al introducir los datos (No se puede dividir por 0)";
                }
                echo "<br><a href='calculadora.html'>Volver a la calculadora</a>";
                break;
        }
    }
?>