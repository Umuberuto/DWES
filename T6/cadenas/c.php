<h3>
    Contar en un texto cuantas veces aparece la palabra <i>de</i>:
</h3>
<?php
    $veces=0;
    $palabra= "de";
    $palabra= strtolower($palabra);
    $texto= "El perro de San Roque decide huir  de aquel que quiere cortarle el rabo.De esa forma, desde ese d&iacute;a no se ha desecho   de  ninguna extremidad de su cuerpo.";
    $texto= strtolower($texto);
    $texto= str_replace(".", " ",$texto); //Con esto me aseguro de que no hayan puesto .De sin espacio (Si no hubiese puesto esto en este texto me habría contado una menos).
    $texto= explode(" ", $texto);
    foreach ($texto as $valor){
        if ($valor==$palabra){
            $veces++;
        }
    }
    echo "<p>La palabra <i>$palabra</i> aparece en el texto <i>$veces</i> veces.</p>";
?>