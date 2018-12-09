<?php
    /*Te devuelve a la página 7.php para dar la sensación de refresco.*/

    /*$pagquenosllama=$_SERVER['REQUEST_URI'];
    header("Location:$pagquenosllama"); NOTA:Esto que había puesto era un bucle 
    infinito porque $_SERVER['REQUEST_URI'] COGÍA 72actualizar.php (Yo esperaba 
    que en $_SERVER['REQUEST_URI'] cogiese la página desde la que se llamase. Ej: 7.php)*/
    
    header("Location:./7.php");
    
    //Podría haber puesto en ./7.php el enlace a ./7.php y ahorrarme ./72actualizar.php
?>