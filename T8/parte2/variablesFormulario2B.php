<?php
    if( //Inicio de condiciones if.
        (!isset($_REQUEST['multi'])) &&
        (!isset($_REQUEST['tex'])) &&
        (!isset($_REQUEST['pas'])) &&
        (!isset($_REQUEST['textar'])) &&
        (!isset($_REQUEST['opt1'])) &&
        (!isset($_REQUEST['opt2'])) &&
        (!isset($_REQUEST['opt3'])) &&
        (!isset($_REQUEST['rad'])) &&
        (!isset($_REQUEST['sel']))
      ) { //Fin de condiciones if.
            header("Refresh: 5; url=./formularioCompleto3.html");
            echo "<p>No ha introducido NING&Uacute;N dato. Ser&aacute; redireccionado";
            echo " en 5 segundos para que introduzca al menos 1 dato.</p>";
    } else { //Inicio de else.
        echo "<table>";
        if(isset($_REQUEST['tex'])&&($_REQUEST['tex']!="")){
            echo"<tr>
                    <td>\$_REQUEST['tex']</td> 
                    <td>{$_REQUEST['tex']}</td>
                 </tr>";
        }
        if(isset($_REQUEST['pas'])&&($_REQUEST['pas']!="")){
            echo"<tr>
                    <td>\$_REQUEST['pas']</td> 
                    <td>{$_REQUEST['pas']}</td>
                 </tr>";
        }
        if(isset($_REQUEST['textar'])&&($_REQUEST['textar']!="")){
            echo"<tr>
                    <td>\$_REQUEST['textar']</td>
                    <td>{$_REQUEST['textar']}</td>
                </tr>";
        }
        if(isset($_REQUEST['opt1'])){
            echo"<tr>
                    <td>\$_REQUEST['opt1']</td>
                    <td>{$_REQUEST['opt1']}</td>
                </tr>";
        }
        if(isset($_REQUEST['opt2'])){
            echo"<tr>
                    <td>\$_REQUEST['opt2']</td>
                    <td>{$_REQUEST['opt2']}</td>
                </tr>";
        }
        if(isset($_REQUEST['opt3'])){
            echo"<tr>
                    <td>\$_REQUEST['opt3']</td>
                    <td>{$_REQUEST['opt3']}</td>
                </tr>";
        }
        if(isset($_REQUEST['rad'])){
            echo"<tr>
                    <td>\$_REQUEST['rad']</td>
                    <td>{$_REQUEST['rad']}</td>
                </tr>";
        }
        if(isset($_REQUEST['sel'])){
            echo"<tr>
                    <td>\$_REQUEST['sel']</td>
                    <td>{$_REQUEST['sel']}</td>
                </tr>";
        }
        if(isset($_REQUEST['multi'])){
            echo"<tr>
                    <td>\$_REQUEST['multi[]']</td>
                    <td>|";foreach($_REQUEST['multi']as $valor){ 
                            echo " $valor |";
                          }
                echo "</td>
                </tr>";
        }
        echo"</table>";
    } //Fin de else.
?>