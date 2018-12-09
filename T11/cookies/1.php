<?php
    ob_start(); /*Empiezo el flujo por si llamo a esta página y NO al index (Este
    flujo es interno al flujo del ../index.php*/
?>

<h4>
    <p>
        Realizar un script que cree una cookie llamada COOKIE1, con el valor 424, que
        expire dentro de 3 minutos y usar la variable superglobal S_SERVER['REQUEST_URI']
        para darle el path actual.
    </p>
    <p>
        Nota: REQUEST_URI contiene la URI que se emple&oacute; para acceder a la p&aacute;gina.
        Por ejemplo: '/index.html'.
    </p>
</h4>

<?php
    if(isset($_COOKIE['COOKIE1']))
        echo '<p>La cookie COOKIE1 YA existe.</p>';
    else{
        if(setcookie("COOKIE1", 424, time()+180, $_SERVER['REQUEST_URI'])) /*NOTA INTERESANTE:
        Como le he puesto en el path el $_SERVER['REQUEST_URI'] Si le llamo desde este archivo
        (./1.php) creo una cookie con distinto path a si le llamo desde (../index.php). Por lo
        tanto puedo tener 2 COOKIE1 (se llaman igual pero son distintas por el path) sin que se
        sobreescriban. Hay que tener cuidado, la COOKIE1 creada en ../index.php vale para TODO
        el dominio pero la COOKIE1 creada en ./1.php NO vale para todo el dominio... Además en
        este caso NO importa porque ambas tienen el mismo valor pero si tuviesen distintos 
        valores funcionarían cada una por su cuenta...*/
        /*Para evitarlo se pone en la ruta / (Mirar ejercicio ./3.php  y ./42.php para más info...)*/        
        
        /*IMPORTANTÍSIMO: ¡Tener cuidado! DEBO poner setcookie(...) NO set_cookie(...)*/
                
        /*IMPORTANTÍSIMO: ¡Tener cuidado! DEBO poner en la fecha de expiación time()+ lo que sea.
        Si NO pongo el time() la COOKIE se autoborra. Me ha pasado muchas veces...*/        
            echo "<p>Cookie COOKIE1 creada con &eacute;xito.</p>";
    }
    ob_end_flush();
?>