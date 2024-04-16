<?php

Class ArraysPHPController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/sesiones/arrays.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$arraysPHPController = new ArraysPHPController();
$arraysPHPController->index();

?>
