<?php

Class BlogController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/practicas/blog.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$blogController = new BlogController();
$blogController->index();

?>
