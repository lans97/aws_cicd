<?php

Class TablasController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/sesiones/tablas_html.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$tablasController = new TablasController();
$tablasController->index();

?>
