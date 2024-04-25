<?php

require_once PROJECT_ROOT . "api/handlers/ClienteHandler.php";
require_once PROJECT_ROOT . "includes/db_connection.php";


function handleClientesEndpoint() {
    global $cnx;
    $clienteHandler = new ClienteHanlder($cnx);

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['cliente-id'])) {
            $cliente = $clienteHandler->getClienteById($_GET['user-id']);
            echo json_encode($cliente);
        } else {
            $clientes = $clienteHandler->getClientes();
            echo json_encode($clientes);
        }
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $requestData = json_decode(file_get_contents('php://input'), true);
        $newCliente = $clienteHandler->createCliente($requestData);
        json_encode($newCliente);
    } else {
        http_response_code(405);
        echo json_encode(array('error'=> 'Method Not Allowed'));
    }

}