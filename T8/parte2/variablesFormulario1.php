<?php
    echo "<table>
            <tr>
                <td>\$_REQUEST['tex']</td> 
                <td>{$_REQUEST['tex']}</td>
            </tr>
            <tr>
                <td>\$_REQUEST['pas']</td>
                <td>{$_REQUEST['pas']}</td>
            </tr>
            <tr>
                <td>\$_REQUEST['textar']</td>
                <td>{$_REQUEST['textar']}</td>
            </tr>
            <tr>
                <td>\$_REQUEST['opt1']</td>
                <td>{$_REQUEST['opt1']}</td>
            </tr>
            <tr>
                <td>\$_REQUEST['opt2']</td>
                <td>{$_REQUEST['opt2']}</td>
            </tr>
            <tr>
                <td>\$_REQUEST['opt3']</td>
                <td>{$_REQUEST['opt3']}</td>
            </tr>
            <tr>
                <td>\$_REQUEST['rad']</td>
                <td>{$_REQUEST['rad']}</td>
            </tr>
            <tr>
                <td>\$_REQUEST['sel']</td>
                <td>{$_REQUEST['sel']}</td>
            </tr>
            <tr>
                <td>\$_REQUEST['multi[]']</td>
                <td>|";for($i=0;$i<count($_REQUEST['multi']);$i++){ 
                        echo " {$_REQUEST['multi'][$i]} |";
                      }
            echo "</td>
            </tr>
          </table>
    ";
?>