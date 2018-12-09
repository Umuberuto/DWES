<h4>
    Construir una matriz que guarde las temperaturas medias por estaciones que se
    han dado en los dos &uacute;ltimos a&ntilde;os en una regi&oacute;n determinada. A la
    hora de construirla debemos especificar como &iacute;ndices por un lado las
    estaciones del a&ntilde;o y por los a&ntilde;os 2013 y 2014:
</h4>
<?php
    $temperaturas[2013]=array("primavera"=>25,"verano"=>35,"otono"=>20,"invierno"=>15);
    $temperaturas[]=array("primavera"=>28,"verano"=>36,"otono"=>24,"invierno"=>18);
    
    echo "<h5>A&Ntilde;O 2013</h5>";
    foreach ($temperaturas[2013]as $clave=>$valor){
        echo "<p>";
        if(ucfirst($clave)=="Otono"){
            echo "Oto&ntilde;o: ";
        } else {
            echo ucfirst($clave),": ";
        }
        echo $valor," grados.";
        echo "</p>";
    }
    
    echo "<h5>A&Ntilde;O 2014</h5>";
    foreach ($temperaturas[2014]as $clave=>$valor){
        echo "<p>";
        if(ucfirst($clave)=="Otono"){
            echo "Oto&ntilde;o: ";
        } else {
            echo ucfirst($clave),": ";
        }
        echo $valor," grados.";
        echo "</p>";
    }
?>