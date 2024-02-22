<?php
    include 'csvDB.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (array_key_exists("user_create", $_POST)) {
            $username = $_POST["username"];
            $nombre = $_POST["nombre"];
            $apaterno = $_POST["apaterno"];
            $amaterno = $_POST["amaterno"];
            $correo = $_POST["correo"];
            $tipo_usuario = $_POST["tipo_usuario"];
            $contrasena = $_POST["contrasena"];
        
            $arr_usuarios = loadUsers();

            if (filesize("../../files/registro.csv") == 0) {
                $id = 0;
            } else {
                $id = sizeof($arr_usuarios);
            }
            
            $contains = false;
            foreach ($arr_usuarios as $key => $usr) {
                if (in_array($username, $usr)) {
                    $contains = true;
                }
            }
            if ($contains && ){
                echo "<script>";
                echo "alert('El nombre de usuario ya está registrado');";
                echo "window.location.href = 'registro.php';";
                echo "</script>";
            } else {
                $nuevo_usuario = array(
                      "id" => $id
                    , "username" => $username
                    , "nombre" => $nombre
                    , "apaterno" => $apaterno
                    , "amaterno" => $amaterno
                    , "correo" => $correo
                    , "tipo_usuario" => $tipo_usuario
                );

                $arr_usuarios[$id] = $nuevo_usuario;
            }
            
            saveUsers($arr_usuarios);
            echo "<script>";
            echo "alert('Usuario agregado exitosamente');";
            echo "window.location.href = 'crud.php';";
            echo "</script>";
        } elseif (array_key_exists("user_update", $_POST)) {
            $arr_usuarios = loadUsers();
            $usr_id = $_POST["user_update"];
            $usuario = array();
            foreach ($arr_usuarios as $key => $user) {
                if ($key === $usr_id) {
                    $usuario = $user;
                    break;
                }
            }
            
            $arr = array(
                "usr_edit_id" => $usr_id
            );

            header("Location: crud.php?".http_build_query($arr));
            die();
        } elseif (array_key_exists("user_delete", $_POST)) {
            echo "Delete";
        }
    }
?>