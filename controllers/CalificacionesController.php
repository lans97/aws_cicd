<?php

Class CalificacionesController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/practicas/calificaciones.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$calificacionesController = new CalificacionesController();
$calificacionesController->index();

?>
