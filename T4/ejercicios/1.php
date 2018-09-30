<h2>Construir un array escalar simple que contenga diez nombres de algunos jugadores de un equipo de la liga espa&ntilde;ola. Despu&eacute;s recorrerlo y crear otro array con los nombres de los jugadores cuyo nombre empiece por R. 
    Pista: una cadena de caracteres tambi&eacute;n es un array:</h2>
<?php
    $equipoliga=array("Pepe","Juan","Rony","Matt","Sara","Mimi","Ana","Leila","Roberta","ron");
    $jugadoresconr=array();
    foreach ($equipoliga as $clave=>$valor){
        if(($valor[0]=="R")||($valor[0]=="r")){
            array_push($jugadoresconr, $valor);
        }
    }
?>