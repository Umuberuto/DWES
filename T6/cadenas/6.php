<h4>
    Programa que recibe una frase y muestra un mensaje de error en caso de que 
    su longitud m&iacute;nima no sea superior a 10 caracteres. Funci&oacute;n strlen.
</h4>
<?php
    $frase="Pirika Pirilala Kokorino Peperuto";
    if(strlen($frase)<=10)
        echo "<p>ERROR.</p>";
    else 
        echo "<p>Su longitud (".strlen($frase).") es superior a 10.</p>";
?>