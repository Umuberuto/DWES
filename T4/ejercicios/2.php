<h3>
    Construir un array asociativo en el que especifiqu&eacute;is para cada jugador
    que met&aacute;is en el la posici&oacute;n que ocupa en el equipo (delantero,
    portero, defensa...):
</h3>
<?php
    $equipo=array(
                "Pepe"=>"portero",
                "Juan"=>"porterosuplente",
                "Rony"=>"defensa",
                "Matt"=>"defensa",
                "Sara"=>"defensa",
                "Mimi"=>"defensa",
                "Ana"=>"delantera",
                "Leila"=>"delantera",
                "Roberta"=>"delantera",
                "ron"=>"delantero"
            );
    
    echo "<p>Array \$equipo:</p>";
    foreach ($equipo as $clave=>$valor){
        echo "<p>&nbsp;&nbsp;&nbsp;Nombre jugador: $clave &nbsp;&nbsp;| &nbsp;&nbsp;
            Posici&oacute;n: $valor</p>";
    }
?>