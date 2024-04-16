<?php
require_once PROJECT_ROOT . "classes/Marca.php";
require_once PROJECT_ROOT . "classes/Equipo.php";

Class CrudEquiposController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        // include PROJECT_ROOT . 'views/practicas/crud_equipos.php';
        include PROJECT_ROOT . 'views/construccion.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
    
    public function handlePCSave() {
        $equipo_post = new Equipo($_POST["id_equipo"]);
        $equipo_post->setIdMarca($_POST["pc_marca"]);
        $equipo_post->setProcesador($_POST["procesador"]);
        $equipo_post->setRAM($_POST["ram"]);
        $equipo_post->setDiscoDuro($_POST["hdd"]);
        $equipo_post->setExistencia($_POST["existencia"]);
        
        if (empty($_POST["id_equipo"])){
            $equipo_post->addEquipo();
        } else {
            $equipo_post->updateEquipo();
        }
        header("Locatoin: /crud-equipos");
    }

    public function handlePCLoad() {
        $id = $_POST["pc_load"];
        $arr = array(
            "equipo-id" => $id
        );

        header("Location: /crud-equipos?".http_build_query($arr));
    }

    public function handlePCDelete() {
        $id = $_POST["pc_delete"];
        $user = new Equipo($id);
        $user->deleteEquipo();
        echo "<script>";
        echo "alert('El equipo con ID [$id] ha sido eliminado');";
        echo "</script>";
        header("Location: /crud-equipos");
    }

    public function handleMarcaSave() {
        $equipo_post = new Marca($_POST["id_marca"]);
        $equipo_post->setNombre($_POST["nombre_marca"]);
        
        if (empty($_POST["id_marca"])){
            $equipo_post->addMarca();
        } else {
            $equipo_post->updateMarca();
        }
        header("Locatoin: /crud-equipos");
    }

    public function handleMarcaLoad() {
        $id = $_POST["marca_load"];
        $arr = array(
            "marca-id" => $id
        );
        header("Location: /crud-equipos?".http_build_query($arr));
    }

    public function handleMarcaDelete() {
        $id = $_POST["marca_delete"];
        $user = new Marca($id);
        $user->deleteMarca();
        echo "<script>";
        echo "alert('La marca con ID [$id] ha sido eliminada');";
        echo "</script>";
        header("Location: /crud-equipos");
    }

}

$crudEquiposController = new CrudEquiposController();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $crudEquiposController->index();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (array_key_exists("pc_save", $_POST)) {
        $crudEquiposController->handlePCSave();
    }
    elseif (array_key_exists("pc_load", $_POST)) {
        $crudEquiposController->handlePCLoad();
    }
    elseif (array_key_exists("pc_delete", $_POST)) {
        $crudEquiposController->handlePCDelete();
    }
    elseif (array_key_exists("marca_save", $_POST)) {
        $crudEquiposController->handleMarcaSave();
    }
    elseif (array_key_exists("marca_load", $_POST)) {
        $crudEquiposController->handleMarcaLoad();
    }
    elseif (array_key_exists("marca_delete", $_POST)) {
        $crudEquiposController->handleMarcaDelete();
    }
}
?>
