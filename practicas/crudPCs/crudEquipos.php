<?php
    include 'csvDB.php';
    $arr_equipos = loadPCs();
    $arr_marcas = loadMarcas();
    $curr_pc = array(
              "id_equipo" => ""
            , "id_marca" => ""
            , "procesador" => ""
            , "ram" => ""
            , "disco_duro" => ""
            , "existencia" => ""
    );

    if (array_key_exists("pc_edit_id", $_GET)) {
        foreach ($arr_equipos as $key => $pc) {
            if ($pc['id_equipo'] == $_GET['pc_edit_id']){
                $curr_pc = $pc;
                break;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>CRUD Equipos</title>
    </head>

    <body>
        <h1>CRUD Equipos</h1>
        <h2>Datos Equipo</h2>
        <form action="crudEquiposCNT.php" method="post">
            <label for="id_pc">ID: <?= $curr_pc['id_equipo'] ?></label>
            <input type="hidden" name="id_pc" id="hd_id_pc" value="<?= $curr_pc['id_equipo'] ?>">
            <div>
                <label for="cmb_pc_marca">Marca</label>
                <select name="pc_marca" id="cmb_tipo_usuario">
                        <option value="" disabled selected>Selecciona una marca</option>
                    <?php foreach ($arr_marcas as $key => $marca) { ?>
                        <option value="<?= $marca["id_marca"]?>"
                            <?= ($marca["id_marca"] == $curr_pc["id_marca"]) ? "selected" : ""; ?>
                        ><?= $marca["nombre_marca"] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="procesador">Procesador</label>
                <input name="procesador" id="txt_procesador" minlength="2" value="<?= $curr_pc['procesador'] ?>" required>
            </div>
            <div>
                <label for="ram">RAM</label>
                <input name="ram" id="txt_ram" minlength="2" value="<?= $curr_pc['ram'] ?>" required>
            </div>
            <div>
                <label for="hdd">Disco Duro</label>
                <input name="hdd" id="txt_hdd" minlength="2" value="<?= $curr_pc['disco_duro'] ?>" required>
            </div>
            <div>
                <label for="existencia">Existencia</label>
                <input name="existencia" id="txt_existencia" minlength="1" value="<?= $curr_pc['existencia'] ?>" required>
            </div>
            <button type="submit" name="pc_save">Guardar</button>
        </form>
        <a href="./crudEquipos.php">
            <button name="clear">Cancelar</button>
        </a>

        <form action="crudEquiposCNT.php" method="post">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Procesador</th>
                <th>RAM</th>
                <th>HDD</th>
                <th>Existencia</th>
                <th colspan="2">Acciones</th>
            </tr>
        <?php foreach ($arr_equipos as $key => $pc) { ?>
            <tr>
                <td><?= $pc["id_equipo"] ?></td>
                <td><?= $arr_marcas[$pc["id_marca"]]['nombre_marca'] ?></td>
                <td><?= $pc["procesador"] ?></td>
                <td><?= $pc["ram"] ?></td>
                <td><?= $pc["disco_duro"] ?></td>
                <td><?= $pc["existencia"] ?></td>
                <td>
                    <button name="pc_update" value="<?= $pc['id_equipo'] ?>">
                        Editar
                    </button>
                </td>
                <td>
                    <button name="pc_delete" value="<?= $pc['id_equipo'] ?>">
                        Eliminar
                    </button>
                </td>
            </tr>
        <?php } ?>
        </table>
        </form>
    </body>
</html>