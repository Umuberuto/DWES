<h4>
    Programa que recibe una frase y elimina los espacios en blanco que tenga tanto
    antes como posteriores a la frase si los hubiese. Funciones rtrim, ltrim, trim.
</h4>
<?php
    $frase="                Hola, quiero decirte algo, pero temo que me tomes por loco.                                                      ";
    $frasetrim=  trim($frase);
    echo "<p>$frasetrim</p>";
?>