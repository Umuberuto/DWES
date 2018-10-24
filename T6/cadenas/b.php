<?php @include_once '../../bibliotecademisfunciones/funcionesUsuarios.php'; ?>
<h3>
    Hacer un script que sirva para validar una cadena de caracteres que tenga un
    nombre de un usuario: <br>
    &nbsp;&nbsp;&nbsp;&nbsp;-tendr&aacute; entre 8 y 12 caracteres <br>
    &nbsp;&nbsp;&nbsp;&nbsp;-no puede empezar por numero <br>
    El script mostrar&aacute; el nombre y si es v&aacute;lido o inv&aacute;lido: 
</h3>
<?php
    $usuario="0Nanana0";
    echo "<p>Usuario: $usuario ";
    if(validarUsuario($usuario)){
        echo "es v&aacute;lido.</p>";
    } else {
        echo "NO es v&aacute;lido.</p>";
    }
?>