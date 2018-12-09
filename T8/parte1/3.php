<h4>
    Realizar el ejercicio anterior pero todo en un mismo programa calculadora2.php
    que se llama a s&iacute; mismo y se env&iacute;a datos de su formulario:
</h4>
<?php
    if($_SERVER['REQUEST_URI']=='/DWES/T8/parte1/3.php'){ 
        include 'calculadora2.php';
    }
    else{
        include './parte1/calculadora2include.php';
    }
?>