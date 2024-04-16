<?php

Class InfoController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/info.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$infoController = new InfoController();
$infoController->index();

?>
