<h2>
    Obtener la hora GMT actual empleando la funci&oacute;n gmmktime() sin par&aacute;metros
    (lo que provoca que se tome la hora GMT actual como valor) y despu&eacute;s mostrarlo
    por pantalla usando la funci&oacute;n date().
</h2>
<?php
    $marca= gmmktime(); //Mejor usar time(). De hecho me sale un warning/error que me indica que debo usar el time() porque parece que esto provoca Informes de errores estrictos (E_STRICT)...
    echo "La marca $marca es equivalente a ".date("d/m/Y H:i",$marca)." al usar la funci&oacute;n date().<br>"; 
?>