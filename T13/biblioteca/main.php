<?php
    require_once './Autor.php';
    require_once './Libro.php';
    //Crear 2 autores y visualizarlos:
    $autor1=new Autor("John","Inglesa", 1930);
    $autor2=new Autor("Rose","Francesa", 1950);
    echo "<h1>Autores:</h1>";
    echo $autor1;
    echo "<br>";
    echo $autor2;
    echo "<br>";
    
    //Crear dos libros y visualizarlos. Respecto al autor del libro, se obtendrán sus datos:
    $libro1=new Libro("0000J","Una rosa morada", $autor2);
    $libro2=new Libro("2222Z","El soldadito maldito", $autor1);
    echo "<h1>Libros:</h1>";
    echo $libro1;
    echo "<br>";
    echo $libro2;
    echo "<br>";
    
    //Prestar el  primer libro. Visualizar sus datos. Volver a prestarlo y observar el resultado:
    $libro1->prestarLibro();
    echo $libro1;
    echo "<br>";
    $libro1->prestarLibro();
    echo $libro1;
    echo "<br>";
    
    //Devolver el primer libro. Visualizar sus datos. Volver a devolverlo y observar el resultado:
    $libro1->devolverLibro();
    echo $libro1;
    echo "<br>";
    $libro1->devolverLibro();
    echo $libro1;
    echo "<br>";
?>