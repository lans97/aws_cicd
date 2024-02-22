<?php
    include 'csvDB.php';
    $arr_marcas = loadMarcas();
    $curr_marca = array(
          "id_marca" => ""
        , "nombre_marca" => ""
    );

    if (array_key_exists("marca_edit_id", $_GET)) {
       $curr_marca = ($arr_marcas[$_GET['marca_edit_id']]);
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>CRUD Marcas PC</title>
    </head>

    <body>
        <h1>CRUD Marcas PC</h1>
        <h2>Datos Marca</h2>
        <form action="crudMarcasCNT.php" method="post">
            <label for="id_marca">ID: <?= $curr_marca['id_marca'] ?></label>
            <input type="hidden" name="id_marca" id="hd_id_marca" value="<?= $curr_marca['id_marca'] ?>">
            <div>
                <label for="nombra_marca">Marca</label>
                <input name="nombre_marca" id="txt_nombre_marca" minlength="2" value="<?= $curr_marca['nombre_marca'] ?>" required>
            </div>
            <button type="submit" name="marca_save">Guardar</button>
        </form>
        <a href="./crudMarcas.php">
            <button name="clear">Cancelar</button>
        </a>

        <form action="crudMarcasCNT.php" method="post">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th colspan="2">Acciones</th>
            </tr>
        <?php foreach ($arr_marcas as $key => $marca) { ?>
            <tr>
                <td><?= $marca["id_marca"] ?></td>
                <td><?= $marca["nombre_marca"] ?></td>
                <td>
                    <button name="marca_update" value="<?= $marca['id_marca'] ?>">
                        Editar
                    </button>
                </td>
                <td>
                    <button name="marca_delete" value="<?= $marca['id_marca'] ?>">
                        Eliminar
                    </button>
                </td>
            </tr>
        <?php } ?>
        </table>
        </form>
    </body>
</html>