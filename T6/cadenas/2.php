<h3>
    Programa que recoge en diferentes campos el nombre y los apellidos de una persona
    y las une en una sola variable de tipo string que debe imprimirse por pantalla.
    Usar funci&oacute;n implode.
</h3>
<?php
    $datos=array("Nico","Umberto","S&aacute;nchez","Avil&eacute;s");
    $datos2= implode(" ", $datos);
    echo "$datos2. <br>";
?>