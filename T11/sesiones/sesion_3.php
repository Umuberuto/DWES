<?php
    session_start();
    if(!isset($_SESSION['contador']))
        $_SESSION['contador']=0;
    else {
        $_SESSION['contador']++;
    }
    $_SESSION['nombre']="SESION_CONTADOR";
    var_dump($_SESSION);
    $_SESSION['nombre2']="SESION_OTRA";
?>

<style>
    tr>*:nth-child(1){
        background-color: yellow;
    }
</style>

<h1>Trabajando con Sesiones</h1>
<table>
    <tr>
        <th colspan='2'> Informaci&oacute;n de la Sesi&oacute;n </th>
    </tr>
    <tr>
    <tr>
        <td>ID</td>
        <td><?php echo session_id();?></td>
    </tr>
    <tr>
        <td>Nombre asignado por nosotros</td>
        <td><?php echo $_SESSION['nombre'];?></td>
    </tr>        
    <tr>
        <td>N&uacute;mero de accesos</td>
        <td><?php echo $_SESSION['contador'];?></td>
    </tr>
    <tr>
        <td>Nombre cambiado</td>
        <td><?php echo $_SESSION['nombre2'];?></td>
    </tr>
</table>
<br>

<?php var_dump($_SESSION);?>

<br>
<a href='./sesion_3.php'>Actualizar</a> | <a href='./sesion_3_reset.php'>Resetear contador</a>