<?php 
    if($_SERVER['REQUEST_URI']=="/DWES/T13/diapositivas/d17.php"){
        include_once './Coche2.php';
    } else {
        include_once './diapositivas/Coche2.php';
    }
?>

<h4>
    A partir de la clase Coche hacer una copia Coche2 cambiando las propiedades
    a private y comprobar que se produce error a la hora de intentar meterles un
    valor.
</h4>

<p>
    Efectivamente se produce un error pero se ARREGLA al crear los m&eacute;todos
    __set y __get. Para ver este error comentar los m&eacute;todos.
</p>

<h4>
    Crear para cada una de ellas dos m&eacute;todos, uno que nos deje meter un
    valor (__set) en cada propiedad y otro que nos permita consultarlo (__get). 
</h4>

<h4>
    Intentar declarar un constructor con el nombre de la clase y probar la
    sobrecarga de constructores.
</h4>

<p>
    NO existe sobrecarga de constructores ya que PHP es muy libre. Solo debe haber
    1 m&eacute;todo constructor. (Preferiblemente el __construct aunque por razones
    de compatibilidad con otras versiones se permite el uso de un m&eacute;todo con
    el mismo nombre que la clase, si existen a la vez m&eacute;todos con el nombre
    de la clase y el __construct, el m&eacute;todo con el nombre de la clase 
    dejar&aacute; de ser constructor y pasar&aacute; a ser un m&eacute;todo normal
    m&aacute;s de la clase). 
</p>

<p>
    <b style="color:red;">IMPORTANTE:</b> Aunque no existe la sobrecarga se puede
    simular. (O eso dicen). En Stack Overflow dicen que <b style="color: red;">NO</b>
    funciona el siguiente c&oacute;digo:<br>
    <p style="color:red; font-weight: bold;">
        &nbsp;&nbsp;&nbsp;&nbsp;class A { <br>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function __construct() { 
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        $a = func_get_args(); <br> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        $i = func_num_args(); <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        if (method_exists($this,$f='__construct'.$i)) { <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        call_user_func_array(array($this,$f),$a); <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} <br>
    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function __construct1($a1)
        { <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        echo('__construct with 1 param called: '.$a1.PHP_EOL); <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} <br>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function __construct2($a1,$a2)
        { <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        echo('__construct with 2 params called: '.$a1.','.$a2.PHP_EOL); <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} <br>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function __construct3($a1,$a2,$a3)
        { <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3.PHP_EOL); <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} <br>
        &nbsp;&nbsp;&nbsp;&nbsp;}
    </p>
    <b style="color:green;">DEBO</b> hacer pruebas por mi cuenta...
</p>

<h4>
    Crear un m&eacute;todo en el que us&eacute;is un array escalar y probarlo.
</h4>

<?php 
    $coch=new Coche2;
    $coch->tiempoMin();
?>

<h4>
    Crear otro m&eacute;todo en el que us&eacute;is un array asociativo y probarlo.
</h4>

<?php $coch->correr(); ?>

<h4>
    A partir de la clase Coche2 hacer una copia y en los constructores con el
    nombre de la clase cambiar ese nombre por la palabra __construct y ver que
    ocurre.
</h4>

<p>
    NO ocurre nada. Ambos significan lo mismo solo que es m&aacute;s recomendable
    crear el constructor con __construct porque aunque la otra forma se acepta por
    compatibilidad entre versiones a partir de no se cual versi&oacute;n de PHP 
    se va a aceptar solo el m&eacute;todo m&aacute;gico con __construct.
</p>