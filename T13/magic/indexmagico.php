<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="Nicolás Umberto Sánchez Avilés">
        <title>Magic Methods</title>
    </head>
<?php
    //Definición del método __autoload NO definido dentro de Magico.php:
    function __autoload($nombreClase){
        echo '<p>Activado el m&eacute;todo __autoload.</p>';
        if (file_exists($nombreClase . '.php')) {
          require $nombreClase . '.php';
          return true;
        } 
      return false;
    }
?>
    <h1>PRUEBA DE M&Eacute;TODOS M&Aacute;GICOS</h1>
    <?php
        /*Llamada al __autoload() (Porque vamos a usar una clase que NO hemos incluido) y
        * a __construct() porque crearemos un objeto:
        */
        $mag=new Magico();
        //Llamada al __clone():
        $mag2=  clone $mag;

        //Llamada al __set():
        $mag->criatura="Elfo";
        
        //Llamada al __get():
        echo $mag->criatura;
        
        //Llamada al __toString():
        echo $mag;
        
        //Llamada al __isset():
        if (isset($mag->criatur)){
            echo "<p>Existe la propiedad criatur en un objeto Magico.</p>";
        } else {
            echo '<p><b>NO</b> existe la propiedad criatur en un objeto Magico.</p>';
        }
        
        /*Llamada al unset(): (Para que se active el __unset de Magico.php, debe ser activado
        sobre un ATRIBUTO de un objeto Magico.)*/
        unset($mag2->criatura);
        
        //Llamada al __invoke():
        $mag();
        
        /*Llamada al __debugInfo():
            var_dump($mag2->escuela);
         * ESTA NO FUNCIONA porque fue añadida en la versión 5.6, NOSOTROS trabajamos con la 5.5.3 (se
         * puede comprobar con phpinfo();).
         */
        
        //Llamada al __call:
        $mag->animalPatronus();
        
        //Llamada al __callStatic:
        $mag->pronunciarHechizo(5);
        
        /*Llamada al __set_state:
        var_export($mag);
         * POR ALGÚN MOTIVO QUE DESCONOZCO NO SE LLAMA A ¡¡¡MI!!! MÉTODO DEFINIDO, SE LLAMA AL POR DEFECTO.
         * ES DECIR, NO FUNCIONA LA LLAMADA AL MÉTODO MÁGICO
         */
        
        //Llamada a destruct (Si no lo llamo aquí se llama SIEMPRE automaticamente al finalizar el script.
        unset($mag2);
        
        //Llamada a __sleep:
        $p=serialize($mag);
        
        //Llamada a __wakeup:
        unserialize($p);
        
    ?>
</html>