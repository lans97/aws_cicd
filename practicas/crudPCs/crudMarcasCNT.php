<?php
    include 'csvDB.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (array_key_exists("marca_save", $_POST)) {
            $id_marca = $_POST["id_marca"];
            $nombre_marca = $_POST["nombre_marca"];
            
            $arr_marcas = loadMarcas();

            if ($id_marca == ""){
                if (filesize("../../files/registroMarcas.csv") == 0) {
                    $id_marca = 0;
                } else {
                    $id_marca = end($arr_marcas)['id_marca'] + 1; 
                }
            }            

            $colision = false;
            foreach ($arr_marcas as $key => $marca) {
                if (in_array($nombre_marca, $marca) && $id_marca != $marca['id_marca']) {
                    $colision = true;
                }
            }

            if ($colision){
                echo "<script>";
                echo "alert('El nombre de marca ya está ocupado');";
                echo "window.location.href = 'crudMarcas.php';";
                echo "</script>";
            }

            $nueva_marca = array(
                  "id_marca" => $id_marca
                , "nombre_marca" => $nombre_marca
            );

            $arr_marcas[$id_marca] = $nueva_marca;

            saveMarcas($arr_marcas);
            echo "<script>";
            echo "alert('Marca guardada exitosamente');";
            echo "window.location.href = 'crudMarcas.php';";
            echo "</script>";
        } elseif (array_key_exists("marca_update", $_POST)) {
            $arr_marcas = loadMarcas();
            $marca_id = $_POST["marca_update"];
            $marca = array();
            foreach ($arr_marcas as $key => $marcaArr) {
                if ($key === $marca_id) {
                    $marca = $marcaArr;
                    break;
                }
            }
            
            $arr = array(
                "marca_edit_id" => $marca_id
            );

            header("Location: crudMarcas.php?".http_build_query($arr));
            die();
        } elseif (array_key_exists("marca_delete", $_POST)) {
            $arr_marcas = loadMarcas();
            $marca_id = $_POST["marca_delete"];
            unset($arr_marcas[$marca_id]);
            saveMarcas($arr_marcas);
            echo "<script>";
            echo "alert('La marca $marca_id ha sido eliminada');";
            echo "window.location.href = 'crudMarcas.php';";
            echo "</script>";
        }
    }
?>