<?php

Class SesionesController {
    public function index() {
        include '../templates/header.php';
        include '../views/sesiones.php';
        include '../templates/footer.php';
    }
}

$sesionesController = new SesionesController();
$sesionesController->index();

?>
