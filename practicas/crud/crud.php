<?php
    include 'csvDB.php';
    $arr_usuarios = loadUsers();
    
    $user_edit = array(
          "id" => ""
        , "username" => ""
        , "nombre" => ""
        , "apaterno" => ""
        , "amaterno" => ""
        , "correo" => ""
        , "tipo_usuario" => "0"
    );

    if (array_key_exists("usr_edit_id", $_GET)) {
       $user_edit = ($arr_usuarios[$_GET['usr_edit_id']]);
    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>CRUD Usuarios</title>
</head>

<body>
<h1>Crear Usuario</h1>
    <form action="crudCNT.php" method="post">
        <div>
            <label for="username">Usuario</label>
            <input name="username" id="txt_username" minlength="2" value="<?= $user_edit['username'] ?>" required>
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input name="nombre" id="txt_nombre" minlength="2" value="<?= $user_edit['nombre'] ?>" required>
        </div>
        <div>
            <label for="apaterno">Apellido Paterno</label>
            <input name="apaterno" id="txt_apaterno" minlength="2" value="<?= $user_edit['apaterno'] ?>" required>
        </div>
        <div>
            <label for="amaterno">Apellido Materno</label>
            <input name="amaterno" id="txt_amaterno" minlength="2" value="<?= $user_edit['amaterno'] ?>" required>
        </div>
        <div>
            <label for="correo">Correo</label>
            <input name="correo" id="txt_correo" minlength="2" value="<?= $user_edit['username'] ?>" required>
        </div>
        <div>
            <label for="cmb_tipo_usuario">Tipo de usuario:</label>
            <select name="tipo_usuario" id="cmb_tipo_usuario">
                <?php foreach ($tipos_usuario as $key => $tipo) { ?>
                    <option value="<?= $tipo["id_tipo"]?>"
                        <?= ($tipo["id_tipo"] == $user_edit["tipo_usuario"]) ? "selected" : ""; ?>
                    ><?= $tipo["desc"] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="txt_contrasena" minlength="2" required>
        </div>
        <div>
            <label for="confirmContra">Confirmar contraseña</label>
            <input type="password" name="confirmContra" id="txt_confirmContra" minlength="2" required>
        </div>
        <button type="submit" name="user_create">Guardar</button>
    </form>
    <h1>Usuarios</h1>
    <form action="crudCNT.php" method="post">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Tipo de Usuario</th>
                <th colspan="2">Acciones</th>
            </tr>
            <?php foreach ($arr_usuarios as $key => $usuario) { ?>
            <tr>
                <td><?= $usuario["id"] ?></td>
                <td><?= $usuario["username"] ?></td>
                <td><?= $usuario["nombre"] ?></td>
                <td><?= $usuario["apaterno"] ?></td>
                <td><?= $usuario["amaterno"] ?></td>
                <td><?= $usuario["correo"] ?></td>
                <td><?= $tipos_usuario[intval($usuario["tipo_usuario"])]["desc"] ?></td>
                <td>
                    <button name="user_update" value="<?= $usuario['id'] ?>">
                        Editar
                    </button>
                </td>
                <td>
                    <button name="user_delete" value="<?= $usuario['id'] ?>">
                        Eliminar
                    </button>
                </td>
            </tr>
            <?php } ?>
        </table>
    </form>
    <script>
        var contrasena = document.getElementById("txt_contrasena")
        , confirmContra = document.getElementById("txt_confirmContra");
    
        function validaContra(){
            if(contrasena.value != confirmContra.value) {
                confirmContra.setCustomValidity("Las contraseñas son diferentes");
            } else {
                confirmContra.setCustomValidity('');
            }
        }
        
        contrasena.onchange = validaContra;
        confirmContra.onkeyup = validaContra;
    </script>
</body>

</html>