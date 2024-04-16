<?php

Class HomeController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/home.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$homeController = new HomeController();
$homeController->index();

?>
