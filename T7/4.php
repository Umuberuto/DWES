<h2>
    Construir la marca de tiempo que corresponda al d&iacute;a 30 de julio de 2013
    a las 23:15 horas empleando la funci&oacute;n mktime() y despu&eacute;s mostrar
    el resultado convertido con la funci&oacute;n date().
</h2>
<?php
    $marca=mktime(23,15,0,07,30,2013);
    echo "La marca $marca es equivalente a ".date("d/m/Y H:i",$marca)." al usar la funci&oacute;n date().<br>";
?>