<h2>Usar un bucle while para sacar la descomposici&oacute;n factorial de un n&uacute;mero.</h2>
<?php 
    $nume=5050; $max=$nume/2; $divis=2; $poten=0;
    echo "<p>Descomposici&oacute;n factorial: <br>";
    echo "$nume = ";
    while ($divis<=$max){
        if($nume%$divis==0){
            while ($nume%$divis==0){
                $nume/=$divis;
                $poten++;
            }
            echo "$divis<sup>$poten</sup>";
            $poten=0;
            if($nume>1)
                echo " x ";
            else {
                echo ".";
            }
        }
        $divis++;
    }
    echo "</p>";