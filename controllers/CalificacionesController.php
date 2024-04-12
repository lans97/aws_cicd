<?php

Class CalificacionesController {
    public function index() {
        include '../templates/header.php';
        include '../views/practicas/calificaciones.php';
        include '../templates/footer.php';
    }
}

$calificacionesController = new CalificacionesController();
$calificacionesController->index();

?>
