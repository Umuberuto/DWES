<?php
    if( (!isset($_REQUEST['multi']))&&(!isset($_REQUEST['tex']))&&(!isset($_REQUEST['pas']))&&(!isset($_REQUEST['textar']))&&(!isset($_REQUEST['opt1']))&&(!isset($_REQUEST['opt2']))&&(!isset($_REQUEST['opt3']))&&(!isset($_REQUEST['rad']))&&(!isset($_REQUEST['sel'])) ){
        header("Refresh: 5; url=./formularioCompleto4.html");
        echo "No ha introducido NING&Uacute;N dato. Ser&aacute; redireccionado en 5 segundos para que introduzca al menos 1 dato.";
    }
    echo '<table>';
    foreach ($_REQUEST as $clave=>$valor){
        if((!is_array($valor))&&!empty($valor)){
            echo "<tr> 
                    <td>\$_REQUEST['$clave']</td>
                    <td>$valor</td>
                  </tr>";
        }  else {
                if(is_array($valor)){
                    echo "<tr> 
                            <td>\$_REQUEST['$clave']</td>
                            <td>|";
                                foreach ($valor as $valori){
                                    echo " $valori |";
                                }
                    echo "              
                            </td>
                          </tr>"; 
                } elseif ($valor!=="") { //Esta "lindeza" de código es necesaria porque la función empty() devuelve true con 0. Básicamente al llegar hasta esta línea si es distinto de "" solo puede ser el numero 0 o otra cosa que el empty devuelva true sin ser true (la función empty está diseñada muy mal)
                    echo "<tr> 
                            <td>\$_REQUEST['$clave']</td>
                            <td>$valor (la funci&oacute;n empty NO filtra bien)</td>
                          </tr>";
                  }
           }
    }
    echo '</table>';
?>