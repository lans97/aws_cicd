<?php

Class PaisesFormsController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        // include PROJECT_ROOT . 'views/sesiones/paises_forms.php';
        include PROJECT_ROOT . 'views/construccion.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$paisesFormsController = new PaisesFormsController();
$paisesFormsController->index();

?>
