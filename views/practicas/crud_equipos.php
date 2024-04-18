<?php
require_once PROJECT_ROOT . "classes/Usuario.php";
require_once PROJECT_ROOT . "classes/Marca.php";

if (isset($_GET['equipo-id'])){
    $equipoId = $_GET['equipo-id'];
} else {
    $equipoId = null;
}
if (isset($_GET['marca-id'])){
    $marcaId = $_GET['marca-id'];
} else {
    $marcaId = null;
}

$curr_equipo = new Equipo($equipoId);
$curr_marca = new Marca($marcaId);
?>

<h1>CRUD Equipos</h1>
<h2>Datos Equipo</h2>
<form action="/crud-equipos" method="post">
    <label for="id_equipo">ID: <?= $curr_equipo->getIdEquipo() ?></label>
    <input type="hidden" name="id_equipo" id="hd_id_equipo" value="<?= $curr_equipo->getIdEquipo() ?>">
    <div>
        <label for="cmb_pc_marca">Marca</label>
        <select name="pc_marca" id="cmb_pc_marca">
            <option value="" disabled selected>Selecciona una marca</option>
            <?php foreach (Marca::getAll() as $key => $marca) { ?>
                <option value="<?= $marca->getIdMarca() ?>" <?= ($marca->getIdMarca() == $curr_equipo->getIdMarca()) ? "selected" : ""; ?>><?= $marca->getNombre() ?></option>
            <?php } ?>
        </select>
    </div>
    <div>
        <label for="procesador">Procesador</label>
        <input name="procesador" id="txt_procesador" minlength="2" value="<?= $curr_equipo->getProcesador() ?>" required>
    </div>
    <div>
        <label for="ram">RAM</label>
        <input name="ram" id="txt_ram" minlength="2" value="<?= $curr_equipo->getRAM() ?>" required>
    </div>
    <div>
        <label for="hdd">Disco Duro</label>
        <input name="hdd" id="txt_hdd" minlength="2" value="<?= $curr_equipo->getDiscoDuro() ?>" required>
    </div>
    <div>
        <label for="existencia">Existencia</label>
        <input name="existencia" id="txt_existencia" minlength="1" value="<?= $curr_equipo->getExistencia() ?>" required>
    </div>
    <button type="submit" name="pc_save">Guardar</button>
</form>
<a href="crud-equipos">
    <button name="clear">Cancelar</button>
</a>

<form action="/crud-equipos" method="post">
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
        <?php foreach (Equipo::getAll() as $key => $pc) { 
            $pc_marca = new Marca($pc->getIdMarca());
        ?>
            <tr>
                <td><?= $pc->getIdEquipo() ?></td>
                <td><?= $pc_marca->getNombre() ?></td>
                <td><?= $pc->getProcesador() ?></td>
                <td><?= $pc->getRAM() ?></td>
                <td><?= $pc->getDiscoDuro() ?></td>
                <td><?= $pc->getExistencia() ?></td>
                <td>
                    <button name="pc_load" value="<?= $pc->getIdEquipo() ?>">
                        Editar
                    </button>
                </td>
                <td>
                    <button name="pc_delete" value="<?= $pc->getIdEquipo() ?>">
                        Eliminar
                    </button>
                </td>
            </tr>
        <?php } ?>
    </table>
</form>

<h1>CRUD Marcas PC</h1>
<h2>Datos Marca</h2>
<form action="/crud-equipos" method="post">
    <label for="id_marca">ID: <?= $curr_marca->getIdMarca() ?></label>
    <input type="hidden" name="id_marca" id="hd_id_marca" value="<?= $curr_marca->getIdMarca() ?>">
    <div>
        <label for="nombra_marca">Marca</label>
        <input name="nombre_marca" id="txt_nombre_marca" minlength="2" value="<?= $curr_marca->getNombre() ?>" required>
    </div>
    <button type="submit" name="marca_save">Guardar</button>
</form>
<a href="/crud-equipos">
    <button name="clear">Cancelar</button>
</a>

<form action="/crud-equipos" method="post">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th colspan="2">Acciones</th>
        </tr>
        <?php foreach (Marca::getAll() as $key => $marca) { ?>
            <tr>
                <td><?= $marca->getIdMarca() ?></td>
                <td><?= $marca->getNombre() ?></td>
                <td>
                    <button name="marca_load" value="<?= $marca->getIdMarca() ?>">
                        Editar
                    </button>
                </td>
                <td>
                    <button name="marca_delete" value="<?= $marca->getIdMarca() ?>">
                        Eliminar
                    </button>
                </td>
            </tr>
        <?php } ?>
    </table>
</form>