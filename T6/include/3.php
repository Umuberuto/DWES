<h3>
    Realiza un programa include4.php en el cual se muestre si el n&uacute;mero 7 y el n&uacute;mero
    22 son primos llamando con include a un programa es_primo que mediante un bucle vea si el n&uacute;mero
    es primo o no (en el momento de que sea divisible por un n&uacute;mero se interrumpe el bucle, el programa
    devuelve un valor booleano usando return y ese valor lo recibe el programa que lo ha llamado.
    Hacer que el texto que sale est&eacute; en una variable de texto en la que encadenamos todo el mensaje.
</h3>
<?php //include './include/include4.php'; //IMPORTANTE CUIDADO CON LA RUTA: La ruta esta es relativa al fichero index.php NO al fichero 3.php ya que el include lo que hace es "añadir código a index.php" no "pasarse a 3.php"?>
<?php include 'include4.php'; //IMPORTANTE CUIDADO CON LA RUTA: Las 2 rutas deberían ser equivalentes en este caso.?>