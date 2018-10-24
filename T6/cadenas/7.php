<h3>
    Programa que recibe una frase y nos dice si es un pal&iacute;ndromo. (Frase
    que se lee igual en las dos direcciones). Funci&oacute;n strrev.
</h3>
<?php
    $palindromo="Oso";
    if( strtoupper ($palindromo) == strtoupper( strrev ($palindromo) ) ){
        echo "<p>La frase es un pal&iacute;ndromo.";
    } else {
        echo "<p>La frase NO es un pal&iacute;ndromo.";
    }
?>