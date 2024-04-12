<?php

Class ExamenesController {
    public function index() {
        include '../templates/header.php';
        include '../views/examenes.php';
        include '../templates/footer.php';
    }
}

$examenesController = new ExamenesController();
$examenesController->index();

?>
