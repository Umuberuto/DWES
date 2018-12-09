<h4>
    Construir un array escalar simple que contenga diez nombres de algunos jugadores
    de un equipo de la liga espa&ntilde;ola. Despu&eacute;s recorrerlo y crear otro
    array con los nombres de los jugadores cuyo nombre empiece por R. 
    Pista: una cadena de caracteres tambi&eacute;n es un array:
</h4>
<?php
    $equipoliga=array("Pepe","Juan","Rony","Matt","Sara","Mimi","Ana","Leila","Roberta","ron");
    $jugadoresconr=array();
    echo "<h5>Equipo liga espa&ntilde;ola entero:</h5>";
    echo "<p>| ";
    foreach ($equipoliga as $valor){
        if(($valor[0]=="R")||($valor[0]=="r")){
            array_push($jugadoresconr, $valor);
        }
        echo $valor." | ";
    }
    echo "</p>";
    
    echo "<h5>Jugadores que empiezan con R o r:</h5>";
    echo "<p>| ";
    foreach ($jugadoresconr as $valor){
        echo $valor." | ";
    }
    echo "</p>";
?>