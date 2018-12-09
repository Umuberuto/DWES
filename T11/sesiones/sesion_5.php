<?php
    ob_start();
    session_start();
    $_SESSION['coche1']=array("modelo"=>"Clio","cilindradas"=>"1565 cc");
    $_SESSION['coche2']=array("modelo"=>"Xsara Picaso","cilindradas"=>"1560 cc");
?>

<style>
    tr>*:nth-child(1){
        background-color: yellow;
    }
</style>

<h1>Trabajando con Sesiones</h1>

<table>
    <tr>
        <th colspan="2">Informaci&oacute;n de la Sesi&oacute;n</th>
    </tr>
    <tr>
        <td>ID</td>
        <td><?php echo session_id();?></td>
    </tr>
    <tr>
        <td>Tiempo de caducidad</td>
        <td><?php echo session_cache_expire()," minutos";?></td>
    </tr>
    <tr>
        <td>Control de cach&eacute;</td>
        <td><?php echo session_cache_limiter();?></td>
    </tr>
    <tr>
        <td>Cookie de sesi&oacute;n</td>
        <td>
            <?php
              foreach (session_get_cookie_params() as $clave=>$valor){
                  echo "$clave=$valor; ";
              }
            ?>
        </td>
    </tr>
    <tr>
        <td>Codificaci&oacute;n</td>
        <td>
            <?php
                foreach ($_SESSION as $coche){
                    echo " | Modelo: ",$coche["modelo"]," / ";
                    echo "Cilindradas: ",$coche["cilindradas"];
                }
            ?> |
        </td>
    </tr>
    <tr>
        <td>Directorio de salvado</td>
        <td><?php echo session_save_path();?></td>
    </tr>
</table>

<br>
<a href="../index.php#ej5">VOLVER AL &Iacute;NDICE</a>

<?php
    unset($_SESSION);
    setcookie(session_name(), "", time()-3600, "/");
    session_destroy();
    ob_end_flush();
?>