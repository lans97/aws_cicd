<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('PROJECT_ROOT', __DIR__ . '/../');

$basePath = '/';
$requestedUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = str_replace($basePath, '', $requestedUrl);

var_dump($route);

$queryParams = $_GET;

switch ($route) {
    case '':
    case 'home':
        include PROJECT_ROOT . 'controllers/HomeController.php';
        break;
    case 'apache2-tutorial':
        include PROJECT_ROOT . 'controllers/Apache2TutorialController.php';
        break;
    case 'blog':
        include PROJECT_ROOT . 'controllers/BlogController.php';
        break;
    case 'horario':
        include PROJECT_ROOT . 'controllers/HorarioController.php';
        break;
    case 'calificaciones':
        include PROJECT_ROOT . 'controllers/CalificacionesController.php';
        break;
    case 'crud-usuarios':
        include PROJECT_ROOT . 'controllers/CrudUsuariosController.php';
        break;
    case 'crud-equipos':
        include PROJECT_ROOT . 'controllers/CrudEquiposController.php';
        break;
    case 'entidad-relacion':
        include PROJECT_ROOT . 'controllers/EntidadRelacionController.php';
        break;
    case 'carrito':
        include PROJECT_ROOT . 'controllers/CarritoController.php';
        break;
    case 'tabla-poblaciones':
        include PROJECT_ROOT . 'controllers/PoblacionesController.php';
        break;
    case 'listas-html':
        include PROJECT_ROOT . 'controllers/ListasController.php';
        break;
    case 'tablas-html':
        include PROJECT_ROOT . 'controllers/TablasController.php';
        break;
    case 'arrays-php':
        include PROJECT_ROOT . 'controllers/ArraysPHPController.php';
        break;
    case 'implode-php':
        include PROJECT_ROOT . 'controllers/ImplodePHPController.php';
        break;
    case 'explode-php':
        include PROJECT_ROOT . 'controllers/ExplodePHPController.php';
        break;
    case 'basico-forms':
        include PROJECT_ROOT . 'controllers/BasicoFormsController.php';
        break;
    case 'paises-forms':
        include PROJECT_ROOT . 'controllers/PaisesFormsController.php';
        break;
    case 'about':
        include PROJECT_ROOT . 'controllers/InfoController.php';
        break;
    case 'clientes':
        include PROJECT_ROOT . 'api/endpoints/clientes.php';
        handleClientesEndpoint();
        break;
    case 'articulos':
        include PROJECT_ROOT . 'api/endpoints/articulos.php';
        handleArticuloEndpoint();
        break;
    default:
        http_response_code(404);
        include PROJECT_ROOT . 'errors/404.php';
        break;
}

?>