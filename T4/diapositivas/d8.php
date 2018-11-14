<h3>Probad con estos datos e inventar un ejercicio diferente:</h3>
<?php
    $array = array(
        "a",
        "b",
        6=>"c",
        "d",
    );
    
    echo "<p>";
        var_dump($array);
    echo '</p>';
    
    $ejerciciodiferente=array(
        -2=>"Oz",
        true,
        NULL,
        0=>34.3,
        34=>3,
        "razer"=>23,
        "vacio"=>"",
        4.45,
        "",
        "estoseranull"=>null
    );
    
    echo "<p>";
        var_dump($ejerciciodiferente);
    echo "</p>";
?>