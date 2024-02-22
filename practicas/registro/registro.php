<?php
    include 'csvDB.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Registro Usuario</title>
</head>

<body>
    <form action="registroCNT.php" method="post">
        <div>
            <label for="username">Usuario</label>
            <input name="username" id="txt_username" minlength="2" required>
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input name="nombre" id="txt_nombre" minlength="2" required>
        </div>
        <div>
            <label for="apaterno">Apellido Paterno</label>
            <input name="apaterno" id="txt_apaterno" minlength="2" required>
        </div>
        <div>
            <label for="amaterno">Apellido Materno</label>
            <input name="amaterno" id="txt_amaterno" minlength="2" required>
        </div>
        <div>
            <label for="correo">Correo</label>
            <input name="correo" id="txt_correo" minlength="2" required>
        </div>
        <div>
            <label for="cmb_tipo_usuario">Tipo de usuario:</label>
            <select name="tipo_usuario" id="cmb_tipo_usuario">
                <?php foreach ($tipos_usuario as $key => $tipo) { ?>
                    <option value="<?= $tipo["id_tipo"]?>"><?= $tipo["desc"] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="txt_contrasena" minlength="2" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>