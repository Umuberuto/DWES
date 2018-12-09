<h4>
    Programa que recibe una frase y dos palabras y reemplaza todas las apariciones
    de la primera palabra en la frase por la segunda. Funci&oacute;n str_replace.
</h4>
<?php
 $saludo="<p>Hola Nico.</p><p>&#191;Sabes por qu&eacute; tu nombre es Nico&#63;</p>
         <p>Nico, &#191;Te gusta ser llamado Nico&#63;</p>";
        //Nota &#191; es la entidad de ¿ y &#63; es la de ?
 echo str_replace("Nico", "Jaime", $saludo);
?>