<h2>
    Realizar un script que utilice un formulario para meter un nombre, un tel&eacute;fono
    y una edad que pasar&aacute; a otra p&aacute;gina que recoja esos datos en unas
    variables y los use para crear una serie de cookies con caducidad de 1 hora y que
    va a meter en un array :
    Despu&eacute;s la segunda p&aacute;gina nos dar&aacute; un mensaje de que se han
    creado las cookies y llamar&aacute; a otra que nos las ense&ntilde;ar&aacute;:    
</h2>
<form name="datos" method="POST" action="62.php">
    <label for="nombre">Nombre:<input type="text" name="nombre"></label><br>
    <label for="tel">Tel&eacute;fono:<input type="number" name="tel"></label><br>
    <label for="edad">Edad:<input type="number" name="edad"></label><br>
    <input type="reset" value="Limpiar">
    <input type="submit" value="Enviar">
</form>