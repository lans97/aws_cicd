<?php

Class ImplodePHPController {
    public function index() {
        include '../templates/header.php';
        include '../views/sesiones/implode.php';
        include '../templates/footer.php';
    }
}

$implodePHPController = new ImplodePHPController();
$implodePHPController->index();

?>
