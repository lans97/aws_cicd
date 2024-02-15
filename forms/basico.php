<?php
    $tipos_usuario = array(
          0 => array (
              "id_tipo" => 0
              , "desc" => "Administrador"
          )
        , 1 => array (
              "id_tipo" => 1
              , "desc" => "Invitado"
          )
        , 2 => array (
              "id_tipo" => 2
              , "desc" => "Ventas"
          )
        , 3 => array (
              "id_tipo" => 3
              , "desc" => "Finanzas"
          )
    )
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Formularios HTML</title>
    </head>
    
    <body>
        Formulario prueba
        <form action="basicoCNT.php" method="post" id="frm_user_login">
            <div>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="txt_usuasrio">
            </div>
            <div>
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" id="txt_contrasena">
            </div>
            <div>
                <label for="cmb_tipo_usuario">Tipo de usuario:</label>
                <select name="tipo_usuario" id="cmb_tipo_usuario">
                    <?php foreach ($tipos_usuario as $key => $tipo) { ?>
                        <option value="<?= $tipo["id_tipo"]?>"><?= $tipo["desc"] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit">Ingresar</button>
        </form>
    </body>

</html>