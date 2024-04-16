<?php

Class BasicoFormsController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        // include PROJECT_ROOT . 'views/sesiones/basico_forms.php';
        include PROJECT_ROOT . 'views/construccion.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$basicoFormsController = new BasicoFormsController();
$basicoFormsController->index();

?>
