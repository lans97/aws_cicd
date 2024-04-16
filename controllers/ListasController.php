<?php

Class ListasController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/sesiones/listas_html.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$listasController = new ListasController();
$listasController->index();

?>
