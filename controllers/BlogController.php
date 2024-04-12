<?php

Class BlogController {
    public function index() {
        include '../templates/header.php';
        include '../views/practicas/blog.php';
        include '../templates/footer.php';
    }
}

$blogController = new BlogController();
$blogController->index();

?>
