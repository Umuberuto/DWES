<h3>
    <p>Realizar un ejemplo vuestro de cada una de esas 4 opciones.</p>
    <p>Distintas formas:</p>
    <ol>
        <li>
            Si asignamos a una matriz el valor del constructor sin poner ning&uacute;n
            argumento se crear&aacute; una matriz vac&iacute;a.
        </li>
        <li>
            Si especificamos como argumentos una lista de elementos separados por comas
            entonces se crear&aacute; una matriz donde cada uno de los elementos
            tendr&aacute; asignado un &iacute;ndice entero consecutivo empezando por el
            valor 0.
        </li>
        <li>
            Este constructor array() tambi&eacute;n nos permite indicar el &iacute;ndice
            asociado a cada valor de una lista de elementos y para ello separaremos cada
            &iacute;ndice de su valor por el operador =>.
        </li>
        <li>Tambi&eacute;n podemos usarlo para crear as&iacute; arrays asociativos.</li>
    </ol>
</h3>
<?php
    //Forma 1:
    $arrayvacio=array();
    echo '<p>';
        var_dump($arrayvacio);
    echo '</p>';
    
    //Forma 2:
    $arraysinindicarindices=array("Hola",null,3,true,false,0,0.8,"");
    echo '<p>';
        var_dump($arraysinindicarindices);
    echo '</p>';
    
    //Forma 3:
    $arrayconindicesnum=array(1=>"Pepe",2=>"Ana", 30=>"May", 40=>"George");
    echo '<p>';
        var_dump($arrayconindicesnum);
    echo '</p>';
    
    //Forma 4:
    $arrayconindicesstring=array("Pepe"=>28, "Ana"=>14, "May"=>11, "George"=>2);
    echo '<p>';
        var_dump($arrayconindicesstring);
    echo '</p>';
    
//    $ejemplo= array ('Marzo' =>1, 'uno', -3 => 'true',1);
//    var_dump($ejemplo);
?>
<h3>
    &iquest;Que har&iacute;a el siguiente ejemplo? <br>$ejemplo= array ('Marzo' =>1,
    'uno', -3 => 'true',1);
</h3>
<h4>
    RESPUESTA: Crea un array cuyo &iacute;ndice "Marzo" contiene un int 1, el 0 un
    String "uno", el -3 un String "true" y el 1 un int 1.
</h4>