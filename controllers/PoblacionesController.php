<?php

Class PoblacionesController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/examenes/poblaciones.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$poblacionesController = new PoblacionesController();
$poblacionesController->index();

?>
