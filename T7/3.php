<h2>
    Obtener la edad de una persona a partir de su fecha de nacimiento.
</h2>
<?php
    $nacimiento="12/09/1998";
    $d=$nacimiento[0].$nacimiento[1];
    $m=$nacimiento[3].$nacimiento[4];
    $a=$nacimiento[6].$nacimiento[7].$nacimiento[8].$nacimiento[9];
    $marcanacimiento=mktime(0,0,0,$m,$d,$a); //IMPORTANTE: mktime solo admite a partir de 1902.
    $edad=date("Y",time())-date("Y",$marcanacimiento);
    echo "Una persona nacida el $nacimiento tiene $edad a&ntilde;os.<br>";
?>