<h3>
    Realizar un programa que cargue una lista de 8 elementos en un formulario
    usando vectores e imprimir la suma de ellos:
</h3>
<?php
    if($_SERVER['PHP_SELF']=='/DWES/T8/parte1/4.php')
        echo '<form name="sumavector" method="POST" action="./4.php">';
    else 
        echo '<form name="sumavector" method="POST" action="./parte1/4.php">';
    
?>
    0<input type="number" name="vector[0]"><br>
    1<input type="number" name="vector[1]"><br>
    2<input type="number" name="vector[2]"><br>
    3<input type="number" name="vector[3]"><br>
    4<input type="number" name="vector[4]"><br>
    5<input type="number" name="vector[5]"><br>
    6<input type="number" name="vector[6]"><br>
    7<input type="number" name="vector[7]"><br>
    <input type="submit" name="submit" value="enviar y sumar datos del vector"><br>
</form>
<?php
    if (isset($_POST['vector'])){
        $suma=0;
        foreach ($_POST['vector'] as $valor){
            $suma+=$valor;
        }
        if($suma!=0)
            echo "La suma del vector es: $suma";
    }
?>