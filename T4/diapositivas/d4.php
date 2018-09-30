<h2>Probad a copiar esas declaraciones de los dos arrays en Netbeans y despu&eacute;s usar para cada uno de ellos la funci&oacute;n var_dump (nombre del array); as&iacute; podemos ver como interpreta esas declaraciones: </h2>
<?php
    $numeros[0]="cero";
    $numeros[1]="Enero";
    $numeros[2]="45";
    
    $valores['Julio']='cero';
    $valores['Agosto']=23;
    
    var_dump($numeros);
    echo "<br>";
    var_dump($valores);
?>