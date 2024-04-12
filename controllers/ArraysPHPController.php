<?php

Class ArraysPHPController {
    public function index() {
        include '../templates/header.php';
        include '../views/sesiones/arrays.php';
        include '../templates/footer.php';
    }
}

$arraysPHPController = new ArraysPHPController();
$arraysPHPController->index();

?>
