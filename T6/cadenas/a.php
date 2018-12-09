<h4>
    Hacer un programa en el que metamos un texto en una variable y cuente cuantas
    veces se repite cada una de las vocales y lo muestre por pantalla.
    Por ejemplo: a:8 / e: 4 / i: 13 / o: 9 / u: 7
</h4>
<?php
    $vocales=array("a"=>0,"e"=>0,"i"=>0,"o"=>0,"u"=>0);
    $string="á lalala o iiii uuuu éée";
    $string=  htmlentities($string,ENT_NOQUOTES); /*He tenido que hacer una cosa
    muy extraña para que nos cuente las tildes porque php NO funciona bien con 
    caracteres multibytes. 
     * (He intentado cambiando la configuración del encoding
    en php.ini, y usando distintas funciones multibyte pero o no funcionaban bien
    o no hacían JUSTO lo que quería. NO ha habido forma de conseguir hacer echo $string[0]
    o la posición que fuese si tenían tilde.)
     * Total que he tenido que transformar las tildes en su entidad html (Ej: 
    á en &aacute;), luego pasarlo a minúscula para no tener que hacer un switch
    con todos los casos en mayúsculas y minúsculas y luego descontar la a, la u 
    y la e de la palabra extra acute añadida para transformar las tildes en su entidad...   
    */
    $string= strtolower($string);
    $lim=  strlen($string);
    
    for ($i=0;$i<$lim;$i++){
        switch ($string[$i]){
            case "a": 
                $vocales["a"]++;
                break;
            case "e": 
                $vocales["e"]++;
                break;
            case "i": 
                $vocales["i"]++;
                break;
            case "o": 
                $vocales["o"]++;
                break;
            case "u": 
                $vocales["u"]++;
                break;
            case "&": 
                $vocales["a"]--;
                $vocales["e"]--;
                $vocales["u"]--;
                break;
        }
    }
    
    echo "<p><strong>";
    foreach ($vocales as $clave=>$valor){
        if ($clave!="u"){
            echo "$clave : $valor / ";
        } else {
            echo "$clave : $valor </strong></p>";
        }
    }
?>