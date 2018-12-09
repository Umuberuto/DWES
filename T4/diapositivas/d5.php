<h4>Comprueba que se siguen las 3 reglas:<br>
    <ol>
        <li>Si la matriz esta vac&iacute;a el &iacute;ndice que asigna al primer elemento es el 0.</li>
        <li>Si al menos tiene un elemento se busca cual es el &iacute;ndice mayor y se asigna el siguiente.</li>
        <li>Si todos los &iacute;ndices num&eacute;ricos son negativos se asigna el valor 0.</li>
    </ol>
</h4>
<?php
    $array1[]="El &iacute;ndice de este string debe ser 0 para que se cumpla la primera regla.";
    $array1[]="El &iacute;ndice de este string debe ser 1 para que se cumpla la segunda regla.";
    $array1[7]="Este string sirve para que el mayor &iacute;ndice sea 7. Quiero esto para demostrar la 2 regla.";
    $array1[]="El &iacute;ndice de este string debe ser 8 para que se cumpla la segunda regla.";
    $array1[-4]="El &iacute;ndice de este string debe ser -4.";
    $array2[-4]="El &iacute;ndice de este string debe ser -4.";
    $array2[-2]="El &iacute;ndice de este string debe ser -2.";
    $array2[-3]="El &iacute;ndice de este string debe ser -3.";
    $array2[]="El &iacute;ndice de este string debe ser 0 para que se cumpla la tercera regla.";
    
    echo '<p>';
       var_dump($array1);
    echo "</p>";
    
    echo '<p>';
       var_dump($array2);
    echo "</p>";
    
    echo "<p>Como podemos observar las leyes se cumplen.</p>";
?>