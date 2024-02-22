<?php
    include 'csvDB.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (array_key_exists("pc_save", $_POST)) {
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
            echo "window.location.href = 'crudEquipos.php';";
            echo "</script>";
        } elseif (array_key_exists("pc_update", $_POST)) {
            $arr_equipos = loadPCs();
            $equipo_id = $_POST["pc_update"];
            $equipo = array();
            foreach ($arr_equipos as $key => $pc) {
                if ($key === $equipo_id) {
                    $equipo = $pc;
                    break;
                }
            }
            
            $arr = array(
                "pc_edit_id" => $equipo_id
            );

            header("Location: crudEquipos.php?".http_build_query($arr));
            die();
        } elseif (array_key_exists("pc_delete", $_POST)) {
            $arr_equipos = loadPCs();
            $equipo_id = $_POST["pc_delete"];
            foreach ($arr_equipos as $key => $pc) {
                if ($pc['id_equipo'] == $_POST['pc_delete']){
                    unset($arr_equipos[$key]);
                    break;
                }
            }
            savePCs($arr_equipos);
            echo "<script>";
            echo "alert('El equipo $equipo_id ha sido eliminado');";
            echo "window.location.href = 'crudEquipos.php';";
            echo "</script>";
        }
    }
?>