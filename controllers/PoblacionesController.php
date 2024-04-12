<?php

Class PoblacionesController {
    public function index() {
        include '../templates/header.php';
        include '../views/examenes/poblaciones.php';
        include '../templates/footer.php';
    }
}

$poblacionesController = new PoblacionesController();
$poblacionesController->index();

?>
