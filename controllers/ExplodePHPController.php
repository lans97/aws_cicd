<?php

Class ExplodePHPController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/sesiones/explode.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$explodePHPController = new ImplodePHPController();
$explodePHPController->index();

?>
