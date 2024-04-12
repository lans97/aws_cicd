<?php

Class CrudUsuariosController {
    public function index() {
        include '../templates/header.php';
        include '../views/practicas/crud_usuarios.php';
        include '../templates/footer.php';
    }
}

$crudUsuariosController = new CrudUsuariosController();
$crudUsuariosController->index();

?>
