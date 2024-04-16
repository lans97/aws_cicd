<?php

Class ImplodePHPController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/sesiones/implode.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$implodePHPController = new ImplodePHPController();
$implodePHPController->index();

?>
