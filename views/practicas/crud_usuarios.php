<?php
require_once PROJECT_ROOT . "classes/Usuario.php";

if (isset($_GET['user-id'])){
    $userId = $_GET['user-id'];
} else {
    $userId = null;
}
$curr_user = new Usuario($userId);
?>

<h1>CRUD Usuarios</h1>
<h2>Datos</h2>
<form action="/crud-usuarios" method="post">
    <input type="hidden" name="id_usuario" id="hd_id_usuario" value="<?= $curr_user->getId_Usuario() ?>">
    <div>
        <label for="username">Usuario</label>
        <input name="username" id="txt_username" minlength="2" value="<?= $curr_user->getUsername() ?>" required>
    </div>
    <div>
        <label for="nombre">Nombre</label>
        <input name="nombre" id="txt_nombre" minlength="2" value="<?= $curr_user->getNombre() ?>" required>
    </div>
    <div>
        <label for="apaterno">Apellido Paterno</label>
        <input name="apaterno" id="txt_apaterno" minlength="2" value="<?= $curr_user->getA_Paterno() ?>" required>
    </div>
    <div>
        <label for="amaterno">Apellido Materno</label>
        <input name="amaterno" id="txt_amaterno" minlength="2" value="<?= $curr_user->getA_Materno() ?>" required>
    </div>
    <div>
        <label for="correo">Correo</label>
        <input name="correo" id="txt_correo" minlength="2" value="<?= $curr_user->getCorreo() ?>" required>
    </div>
    <div>
        <label for="cmb_tipo_usuario">Tipo de usuario:</label>
        <select name="tipo_usuario" id="cmb_tipo_usuario">
            <?php foreach (Usuario::$tipos as $key => $tipo) { ?>
                <option value="<?= $tipo["id_tipo"] ?>" <?= ($tipo["id_tipo"] == $curr_user->getTipo()) ? "selected" : ""; ?>><?= $tipo["desc"] ?></option>
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
    <button type="submit" name="user_save">Guardar</button>
</form>
<a href="/crud-usuarios">
    <button name="clear">Cancelar</button>
</a>
<h2>Registro de Usuarios</h2>
<form action="/crud-usuarios" method="post">
    <table class="table table-bordered" border="1">
        <tr>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Tipo de Usuario</th>
            <th colspan="2">Acciones</th>
        </tr>
        <?php foreach (Usuario::getAll() as $key => $usuario) { ?>
            <tr>
                <td><?= $usuario->getUsername() ?></td>
                <td><?= $usuario->getNombre() ?></td>
                <td><?= $usuario->getA_Paterno() ?></td>
                <td><?= $usuario->getA_Materno() ?></td>
                <td><?= $usuario->getCorreo() ?></td>
                <td><?= Usuario::$tipos[intval($usuario->getTipo())]["desc"] ?></td>
                <td>
                    <button name="user_load" value="<?= $usuario->getId_Usuario() ?>">
                        Editar
                    </button>
                </td>
                <td>
                    <button name="user_delete" value="<?= $usuario->getId_Usuario() ?>">
                        Eliminar
                    </button>
                </td>
            </tr>
        <?php } ?>
    </table>
</form>
<script src="../../public/js/usuarios.js"></script>