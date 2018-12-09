<h4>
    Construye dos ficheros: factorial.inc (que sirva para calcular el factorial
    de un n&uacute;mero) y divisores.inc (que sirva para calcular los divisores
    primos de un n&uacute;mero). Despu&eacute;s construye un programa include1.php
    en el que declares una variable $num=20 y que llame a los dos ficheros anteriores
    usando include:
</h4>
<?php
    if ($_SERVER['REQUEST_URI']=="/DWES/T6/include/1.php"){
        include './include1.php';
    } else {
        include './include/include1.php';
    }
?>