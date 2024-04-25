
<?php

require_once PROJECT_ROOT . "api/handlers/ArticuloHandler.php";
require_once PROJECT_ROOT . "includes/db_connection.php";


function handleArticuloEndpoint() {
    global $cnx;
    $articuloHandler = new ArticuloHandler($cnx);
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['codigo-articulo'])) {
            $articulo = $articuloHandler->getArticuloByCodigo($_GET['codigo-articulo']);
            if ($articulo) {
                $response = [
                    "success" => "true",
                    "data" => $articulo,
                ];
            } else {
                $response = [
                    "success" => "false",
                    "data" => $articulo,
                    "error" => "Article not found"
                ];
            }
            echo json_encode($response);
        } else {
            $articulos = $articuloHandler->getArticulos();
            echo json_encode($articulos);
        }
    } else {
        http_response_code(405);
        echo json_encode(array('error'=> 'Method Not Allowed'));
    }

}