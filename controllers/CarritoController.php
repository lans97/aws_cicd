<?php

Class CarritoController {
    public function index() {
        include PROJECT_ROOT . 'views/practicas/carrito.php';
    }
}

$carritoController = new CarritoController();
$carritoController->index();

?>
