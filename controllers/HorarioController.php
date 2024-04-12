<?php

Class HorarioController {
    public function index() {
        include '../templates/header.php';
        include '../views/practicas/horario.php';
        include '../templates/footer.php';
    }
}

$horarioController = new HorarioController();
$horarioController->index();

?>
