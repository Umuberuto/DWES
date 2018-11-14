<?php
    echo '<h3>Crea un fichero en php que muestre un mensaje en el navegador diciendo
        "Visualizando nombre y valores de variables" y en el que definas y muestres
        nombre y valor de variables correspondientes a los tipos int, float y string.</h3>';
?>
<h4>Visualizando nombre y valores de variables:</h4>
<?php
    //Iniciamos variables
    $int=4; $float=4.16; $string="Hola";
    
    //Mostramos variables y contenidos
    echo "<p>\$int = $int.</p>".'<p>$float = '."$float.</p>";
    print "<p>\$string = $string.</p>";
?>    