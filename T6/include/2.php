<h4>
    <p>Realiza dos programas similares:</p>
    <ol type="a">
        <li>
            include2.php en el que dentro de un bucle for llame usando include a factorial.inc
            (para los valores 10 y 30) y a divisores.inc (para los valores 20 y 40).
        </li>
    </ol>
</h4>
<?php
    if ($_SERVER['REQUEST_URI']=="/DWES/T6/include/2.php"){
        include './include2.php';
    } else {
        include './include/include2.php';
    }
?>
<h4>
    <ol type="a" start="2">
        <li>
            include3.php ser&aacute; otra versi&oacute;n y har&aacute; lo mismo pero en ella
            deber&eacute;is usar un bucle for (;;).
        </li>
    </ol>
</h4>
<?php
    if ($_SERVER['REQUEST_URI']=="/DWES/T6/include/2.php"){
        include './include3.php';
    } else {
        include './include/include3.php';
    }
?>