<?php
    include 'csvDB.php';
    $arr_usuarios = loadUsers();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Registro Usuario</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Tipo de Usuario</th>
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
        </tr>
        <? } ?>
    </table>
</body>
</html>