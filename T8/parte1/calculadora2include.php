<?php 
    @include_once '../../bibliotecademisfunciones/funcionesNumeros.php'; 
    /*Esta la he creado porque la ruta del <a> me daba error si la llamaba desde
    el index.php. Si llamamos a calculadora2include.php directamente dará error.
    Está diseñada para ser incluida por el index.php de hecho NO hago redireccionamiento
    para solucionar este error para que se vea a lo que me refiero...*/
?>
<?php
    //Este formulario se manda datos así mismo para funcionar como una calculadora
    if ( ( !isset ($_POST['num1']) || ($_POST['num1']=="") )
                                ||
    ( !isset ($_POST['num2']) || ($_POST['num2']=="") ) ) {
        echo '<form name="calculadora" method="POST" action="'.$_SERVER['PHP_SELF'].'">
            <h1>Calculadora</h1>
            <span>
                <input type="number" name="num1">
                <select name="op">
                    <option value="+" selected>+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="number" name="num2">
                <input type="submit" value="=">
            </span>
        </form>';
    } else {
        switch ($_POST['op']){
            case "+":
                echo "<p>La suma de {$_POST['num1']} y {$_POST['num2']} es: ";
                echo sumar($_POST['num1'], $_POST['num2']).".</p>";
                echo "<a href='./parte1/calculadora2.php'>Volver a la calculadora</a>";
                break;
            case "-":
                echo "<p>La resta de {$_POST['num1']} y {$_POST['num2']} es: ";
                echo restar($_POST['num1'], $_POST['num2']).".</p>";
                echo "<a href='./parte1/calculadora2.php'>Volver a la calculadora</a>";
                break;
            case "*":
                echo "<p>La multiplicaci&oacute;n de {$_POST['num1']} y {$_POST['num2']} es: ";
                echo multiplicar($_POST['num1'], $_POST['num2']).".</p>";
                echo "<a href='./parte1/calculadora2.php'>Volver a la calculadora</a>";
                break;
            case "/":
                if (($divi=dividir($_POST['num1'], $_POST['num2']))!=null){
                    echo "<p>La divisi&oacute;n de {$_POST['num1']} y {$_POST['num2']} es: $divi";
                } else {
                    echo "<p>ERROR al introducir los datos (No se puede dividir por 0)";
                }
                echo ".</p><a href='./parte1/calculadora2.php'>Volver a la calculadora</a>";
                break;
        }
    }