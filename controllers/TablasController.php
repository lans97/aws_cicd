<?php

Class TablasController {
    public function index() {
        include '../templates/header.php';
        include '../views/sesiones/tablas_html.php';
        include '../templates/footer.php';
    }
}

$tablasController = new TablasController();
$tablasController->index();

?>
