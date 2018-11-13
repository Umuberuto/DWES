<h3>
    Haz ese mismo ejercicio pero en lugar de usar dos p&aacute;ginas haciendo que
    la p&aacute;gina se llame a si misma pero sin errores:
</h3>
<div class="fondonaranja" style="background-color: orange;">
    <h1>FORMULARIO COMPLETO POST</h1>
    <form name ='formcompletopost' method='POST' action=""><!--IMPORTANTE: Dejar el action en blanco hace que se llame a sí mismo (El . hace que llame a la carpeta en la que está el archivo)-->
        <table>
            <tr>
                <td>
                    <label for='tex'>Texto:</label>
                </td>
                <td>
                    <input type='text' name='tex'>
                </td>
                <td>
                    <label for='pas'>Password:</label>
                </td>
                <td>
                    <input type='password' name='pas'>
                </td>
            </tr>
            <tr>
                <td height="80" valign="center">
                    <label for='textar'>Textarea:</label>
                </td>
                <td colspan="3" height="80" valign="top">
                    <textarea rows="3" cols="50" name='textar' maxlength="200"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <label for='opt1'>Opci&oacute;n 1: </label>                
                        <input type='checkbox' name='opt1' value="Opci&oacute;n&nbsp;1">
                        <br>
                        <label for='opt2'>Opci&oacute;n 2: </label>                
                        <input type='checkbox' name='opt2' value="Opci&oacute;n&nbsp;2">
                        <br>
                        <label for='opt3'>Opci&oacute;n 3: </label>                
                        <input type='checkbox' name='opt3' value="Opci&oacute;n&nbsp;3">
                    </fieldset>
                </td>
                <td align="center">
                    <fieldset>
                        <label for='r1'>Radio 1: </label>                
                        <input type='radio' id='r1' name='rad' value="Radio&nbsp;1">
                        <br>
                        <label for='r2'>Radio 2: </label>                
                        <input type='radio' id='r2' name='rad' value="Radio&nbsp;2">
                    </fieldset>
                </td>
                <td valign="top">
                    <label for='sel'>Selecci&oacute;n:</label>
                    <select name='sel'>
                        <option value="primera&nbsp;opci&oacute;n">primera opci&oacute;n</option>
                        <option value="segunda&nbsp;opci&oacute;n">segunda opci&oacute;n</option>
                    </select>
                </td>
                <td align="center">
                    <label for='multi[]'>Selecci&oacute;n m&uacute;ltiple:</label> <!-- IMPORTANTE: Es necesario el [] en el nombre para indicar que es un array porque si no en las variables de PHP (Ej $_REQUEST[]) se guarda un solo valor.-->
                    <br>
                    <select name='multi[]' multiple> 
                        <option>primera</option>
                        <option>segunda</option>
                        <option>tercera</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <input type='button' value='Bot&oacute;n'>
                    <input type='reset' value='Limpiar'>
                    <input type='submit' value='Enviar'>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php
    if (isset($_REQUEST)){
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
    }
?>