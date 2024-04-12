<?php

Class Apache2TutorialController {
    public function index() {
        include '../templates/header.php';
        include '../views/practicas/apache2.php';
        include '../templates/footer.php';
    }
}

$apache2TutorialController = new Apache2TutorialController();
$apache2TutorialController->index();

?>