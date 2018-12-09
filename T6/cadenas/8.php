<h4>
    Programa que recibe una frase y una palabra y nos dice si la palabra est&aacute;
    contenida en la frase. Funci&oacute;n strstr.
</h4>
<?php
    $hechizo="Perutan peton pararin rapon";
    /*NOTA: Según las especificaciones de php de strstr() es mejor usar strpos()
    porque es más rápida y consume menos recursos (Y nosotros no vamos a utilizar
    el string que nos devuelve la función strstr())
    */ 
    $palabra="perutan";
    $hechizo=  strtoupper($hechizo);
    $palabra= strtoupper($palabra);
    $prueba=  strpos($hechizo, $palabra);
    if( is_numeric ($prueba) ) { /*IMPORTANTE: NO puedo usar if(!prueba){ porque
    si la palabra ESTÁ contenida pero en la posición 0 la funcion devuelve 0 en
    lugar de false y este 0 es interpretado como false... (El problema de los == o ===)
    */
        echo "<p> La palabra est&aacute; contenida en la frase.</p>";
    } else {
        echo "<p> La palabra NO est&aacute; contenida en la frase.</p>";
    }
?>