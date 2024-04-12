<?php

Class InfoController {
    public function index() {
        include '../templates/header.php';
        include '../views/info.php';
        include '../templates/footer.php';
    }
}

$infoController = new InfoController();
$infoController->index();

?>
