<?php

Class EntidadRelacionController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/practicas/entidad_relacion.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$entidadRelacionController = new EntidadRelacionController();
$entidadRelacionController->index();

?>