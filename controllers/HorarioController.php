<?php

Class HorarioController {
    public function index() {
        include PROJECT_ROOT . 'templates/header.php';
        include PROJECT_ROOT . 'views/practicas/horario.php';
        include PROJECT_ROOT . 'templates/footer.php';
    }
}

$horarioController = new HorarioController();
$horarioController->index();

?>
