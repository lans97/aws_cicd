<?php

Class ListasController {
    public function index() {
        include '../templates/header.php';
        include '../views/sesiones/listas_html.php';
        include '../templates/footer.php';
    }
}

$listasController = new ListasController();
$listasController->index();

?>
