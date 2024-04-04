<?php
    include 'utils.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (array_key_exists("user_save", $_POST)) {
            $user_post = new Usuario($_POST["id_usuario"]);
            $user_post = array(
                  "username" => $_POST["username"]
                , "nombre" => $_POST["nombre"]
                , "apaterno" => $_POST["apaterno"]
                , "amaterno" => $_POST["amaterno"]
                , "correo" => $_POST["correo"]
                , "tipo_usuario" => $_POST["tipo_usuario"]
            );

            if (empty(get_user($user_post["id"]))){
                if (!add_user($user_post)) {
                    echo "<script>";
                    echo "alert('El nombre de usuario ya existe');";
                    echo "window.location.href = 'registro.php';";
                    echo "</script>";
                }
            } else {
                edit_user($user_post["id"], $user_post);
            }

            echo "<script>";
            echo "alert('Usuario guardado exitosamente');";
            echo "window.location.href = 'registro.php';";
            echo "</script>";
        } elseif (array_key_exists("user_load", $_POST)) {
            $arr_usuarios = loadUsers();
            $id = $_POST["user_load"];
            
            $arr = array(
                "usr_edit_id" => $id
            );

            header("Location: registro.php?".http_build_query($arr));
            die();
        } elseif (array_key_exists("user_delete", $_POST)) {
            $id = $_POST["user_delete"];
            delete_user($id);
            echo "<script>";
            echo "alert('El usuario $id ha sido eliminado');";
            echo "window.location.href = 'registro.php';";
            echo "</script>";
        }
    }
?>