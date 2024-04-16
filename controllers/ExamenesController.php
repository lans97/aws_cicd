<?php

Class ExamenesController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/examenes.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$examenesController = new ExamenesController();
$examenesController->index();

?>
