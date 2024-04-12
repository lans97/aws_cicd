<?php

Class BasicoFormsController {
    public function index() {
        include '../templates/header.php';
        include '../views/sesiones/basico_forms.php';
        include '../templates/footer.php';
    }
}

$basicoFormsController = new BasicoFormsController();
$basicoFormsController->index();

?>
