<?php

Class Apache2TutorialController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        //include PROJECT_ROOT . 'views/practicas/apache2.php';
        include PROJECT_ROOT . 'views/construccion.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$apache2TutorialController = new Apache2TutorialController();
$apache2TutorialController->index();

?>