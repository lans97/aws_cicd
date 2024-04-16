<?php

Class CrudEquiposController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        // include PROJECT_ROOT . 'views/practicas/crud_equipos.php';
        include PROJECT_ROOT . 'views/construccion.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
    
    public function handleSavePC() {
        $id_equipo = $_POST["id_pc"];
        $id_marca = $_POST["pc_marca"];
        $procesador = $_POST["procesador"];
        $ram = $_POST["ram"];
        $disco_duro = $_POST["hdd"];
        $existencia = $_POST["existencia"];
        
        $arr_equipos = loadPCs();

        if ($id_equipo == ""){
            if (filesize("../../files/registroEquipos.csv") == 0) {
                $id_equipo = 0;
            } else {
                $id_equipo = end($arr_equipos)['id_equipo'] + 1; 
            }
        }            

        $nueva_pc = array(
              "id_equipo" => $id_equipo
            , "id_marca" => $id_marca
            , "procesador" => $procesador
            , "ram" => $ram
            , "disco_duro" => $disco_duro
            , "existencia" => $existencia
        );

        $arr_equipos[$id_equipo] = $nueva_pc;

        savePCs($arr_equipos);
        echo "<script>";
        echo "alert('Equipo guardado exitosamente');";
        echo "</script>";
    }

    public function handleLoadPC() {
    }

    public function handleDeletePC() {
    }
}

$crudEquiposController = new CrudEquiposController();
$crudEquiposController->index();

if (array_key_exists("pc_save", $_POST)) {
    echo 'hi';
}
?>
