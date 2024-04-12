<?php

Class ExplodePHPController {
    public function index() {
        include '../templates/header.php';
        include '../views/sesiones/explode.php';
        include '../templates/footer.php';
    }
}

$explodePHPController = new ImplodePHPController();
$explodePHPController->index();

?>
