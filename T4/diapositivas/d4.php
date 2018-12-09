<h4>
    Probad a copiar esas declaraciones de los dos arrays en Netbeans y despu&eacute;s
    usar para cada uno de ellos la funci&oacute;n var_dump (nombre del array); as&iacute;
    podemos ver como interpreta esas declaraciones:
</h4>
<?php
    $numeros[0]="cero";
    $numeros[1]="Enero";
    $numeros[2]="45";
    
    $valores['Julio']='cero';
    $valores['Agosto']=23;
    
    echo '<p>';
        var_dump($numeros);
    echo "</p>";
    
    echo '<p>';
        var_dump($valores);
    echo "</p>";
?>