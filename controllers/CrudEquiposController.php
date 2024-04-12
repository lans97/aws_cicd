<?php

Class CrudEquiposController {
    public function index() {
        include '../templates/header.php';
        include '../views/practicas/crud_equipos.php';
        include '../templates/footer.php';
    }
}

$crudEquiposController = new CrudEquiposController();
$crudEquiposController->index();

?>
