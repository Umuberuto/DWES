<h2>Realizar un programa que muestre el c&aacute;lculo del factorial de 5 mas o menos de esta forma y usando un bucle for
    Despu&eacute;s hacer otras dos versiones usando bucle do while y bucle while</h2>
<h3>Con FOR</h3>
<p>
    5! = 
    <?php
        $res=1;
        for ($i=5;$i>0;$i--){
            if ($i!=1){
                echo "$i * ";
            }else{
                echo "$i = ";
            }
            $res*=$i;
        }
        echo "$res.";
    ?>
</p>
<h3>Con DO WHILE</h3>
<p>
    5! = 
    <?php
        $resu=1;
        $j=5;
        do{
            if ($j!=1){
                echo "$j * ";
            }else{
                echo "$j = ";
            }
            $resu*=$j;
            $j--;
        } while ($j>0);
        echo "$resu.";
    ?>
</p>
<h3>Con WHILE</h3>
<p>
    5! = 
    <?php
        $resul=1;
        $k=5;
        while ($k>=1){
            if ($k!=1){
                echo "$k * ";
            }else{
                echo "$k = ";
            }
            $resul*=$k;
            $k--;
        }
        echo "$resul.";
    ?>
</p>