<?php

Class PracticasController {
    public function index() {
        include '../templates/header.php';
        include '../templates/footer.php';
    }
}

$practicasController = new PracticasController();
$practicasController->index();

?>
