<?php
require_once PROJECT_ROOT . "classes/Usuario.php";

Class CrudUsuariosController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/practicas/crud_usuarios.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
    
    public function handleUserSave() {
        $user_post = new Usuario($_POST["id_usuario"]);
        $user_post->setUsername($_POST["username"]);
        $user_post->setNombre($_POST["nombre"]);
        $user_post->setA_Paterno($_POST["apaterno"]);
        $user_post->setA_Materno($_POST["amaterno"]);
        $user_post->setCorreo($_POST["correo"]);
        $user_post->setTipo($_POST["tipo_usuario"]);
        
        if (empty($_POST["id_usuario"])){
            $user_post->addUsuario();
        } else {
            $user_post->updateUsuario();
        }
        header("Location: /crud-usuarios");
    }
    
    public function handleUserLoad() {
        $id = $_POST["user_load"];
        $arr = array(
            "usr_edit_id" => $id
        );

        header("Location: /crud-usuarios?".http_build_query($arr));
        die();
    }
    public function handleUserDelete() {
        $id = $_POST["user_delete"];
        $user = new Usuario($id);
        $user->deleteUsuario();
        echo "<script>";
        echo "alert('El usuario con ID [$id] ha sido eliminado');";
        echo "</script>";
        header("Location: /crud-usuarios");
    }
}

$crudUsuariosController = new CrudUsuariosController();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $crudUsuariosController->index();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (array_key_exists("user_save", $_POST)) {
        $crudUsuariosController->handleUserSave();
    }
    elseif (array_key_exists("user_load", $_POST)) {
        $crudUsuariosController->handleUserLoad();
    }
    elseif (array_key_exists("user_delete", $_POST)) {
        $crudUsuariosController->handleUserDelete();
    }
}
?>
