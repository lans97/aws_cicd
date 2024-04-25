
<?php

require_once PROJECT_ROOT . "api/handlers/ArticuloHandler.php";
require_once PROJECT_ROOT . "includes/db_connection.php";


function handleArticuloEndpoint() {
    global $cnx;
    $articuloHandler = new ArticuloHandler($cnx);
    
    if ($_SERVER['REQUEST METHOD'] === 'GET') {
        if (isset($_GET['codigoArticulo'])) {
            $articulo = $articuloHandler->getArticuloByCodigo($_GET['codigoArticulo']);
            echo json_encode($articulo);
        } else {
            $articulos = $articuloHandler->getArticulos();
            echo json_encode($articulos);
        }
    } else {
        http_response_code(405);
        echo json_encode(array('error'=> 'Method Not Allowed'));
    }

}