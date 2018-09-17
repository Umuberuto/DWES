<?php
    echo '<h2>Crea un fichero en php que muestre un mensaje en el navegador diciendo "Visualizando nombre y valores de variables" y en el que definas y muestres nombre y valor de variables correspondientes a los tipos int, float y string.</h2>';
?>
<h3>Visualizando nombre y valores de variables:</h3>
<?php
    //Iniciamos variables
    $int=4; $float=4.16; $string="Hola";
    
    //Mostramos variables y contenidos
    echo "\$int = $int.<br>".'$float = '."$float.<br>";
    print "\$string = $string.<br>";
?>    