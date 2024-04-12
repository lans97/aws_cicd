<?php

Class PaisesFormsController {
    public function index() {
        include '../templates/header.php';
        include '../views/sesiones/paises_forms.php';
        include '../templates/footer.php';
    }
}

$paisesFormsController = new PaisesFormsController();
$paisesFormsController->index();

?>
