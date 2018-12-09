<h4>
    Realizar un ejemplo de uso de formularios similar a los de UT8 comprobando
    como sale y que aparece en la llamada al explorador. Hacer dos versiones una
    para POST y otra para GET. Despu&eacute;s intentar hacer la llamada de forma
    directa en la l&iacute;nea de llamada al explorador y ver lo que ocurre:
</h4>
<div class="fondonaranja" style="background-color: orange;">
    <h1>FORMULARIO COMPLETO GET</h1>
    <form name ='formcompletoget' method='GET' action="">
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
                        <option>primera opci&oacute;n</option>
                        <option>segunda opci&oacute;n</option>
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
    <h1>FORMULARIO COMPLETO POST</h1>
    <form name ='formcompletopost' method='POST' action="">
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
                        <option>primera opci&oacute;n</option>
                        <option>segunda opci&oacute;n</option>
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