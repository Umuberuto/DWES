<h2>Realizar un ejemplo vuestro de cada una de esas 4 opciones</h2>
<p>Distintas formas:</p>
<ol>
    <li>Si asignamos a una matriz el valor del constructor sin poner ning&uacute;n argumento se crear&aacute; una matriz vac&iacute;a.</li>
    <li>Si especificamos como argumentos una lista de elementos separados por comas entonces se crear&aacute; una matriz donde cada uno de los elementos tendr&aacute; asignado un &iacute;ndice entero consecutivo empezando por el valor 0.</li>
    <li>Este constructor array() tambi&eacute;n nos permite indicar el &iacute;ndice asociado a cada valor de una lista de elementos y para ello separaremos cada &iacute;ndice de su valor por el operador =>.</li>
    <li>Tambi&eacute;n podemos usarlo para crear as&iacute; arrays asociativos.</li>
</ol>
<?php
    //Forma 1:
    $arrayvacio=array();
    var_dump($arrayvacio);
    echo '<br>';
    //Forma 2:
    $arraysinindicarindices=array("Hola",null,3,true,false,0,0.8,"");
    var_dump($arraysinindicarindices);
    echo '<br>';
    //Forma 3:
    $arrayconindicesnum=array(1=>"Pepe",2=>"Ana", 30=>"May", 40=>"George");
    var_dump($arrayconindicesnum);
    echo "<br>";
    //Forma 4:
    $arrayconindicesstring=array("Pepe"=>28, "Ana"=>14, "May"=>11, "George"=>2);
    var_dump($arrayconindicesstring);
    echo '<br>';
//    $ejemplo= array ('Marzo' =>1, 'uno', -3 => 'true',1);
//    var_dump($ejemplo);
?>
<h2>¿Que har&iacute;a el siguiente ejemplo? <br>$ejemplo= array ('Marzo' =>1, 'uno', -3 => 'true',1);</h2>
<h3>Crea un array cuyo &iacute;ndice "Marzo" contiene un int 1, el 0 un String "uno", el -3 un String "true" y el 1 un int 1.</h3>