<?php

define('PROJECT_ROOT', __DIR__ . '/../');

$basePath = '/';
$requestedUrl = $_SERVER['REQUEST_URI'];
$route = str_replace($basePath, '', $requestedUrl);

switch ($route) {
    case '':
    case '/':
    case 'home':
        include '../controllers/HomeController.php';
        break;
    case 'practicas':
        include '../controllers/PracticasController.php';
        break;
    case 'apache2-tutorial':
        include '../controllers/Apache2TutorialController.php';
        break;
    case 'blog':
        include '../controllers/BlogController.php';
        break;
    case 'horario':
        include '../controllers/HorarioController.php';
        break;
    case 'calificaciones':
        include '../controllers/CalificacionesController.php';
        break;
    case 'crud-usuarios':
        include '../controllers/CrudUsuariosController.php';
        break;
    case 'crud-equipos':
        include '../controllers/CrudEquiposController.php';
        break;
    case 'examenes':
        include '../controllers/ExamenesController.php';
        break;
    case 'tabla-poblaciones':
        include '../controllers/PoblacionesController.php';
        break;
    case 'sesiones':
        include '../controllers/SesionesController.php';
        break;
    case 'listas-html':
        include '../controllers/ListasController.php';
        break;
    case 'tablas-html':
        include '../controllers/TablasController.php';
        break;
    case 'arrays-php':
        include '../controllers/ArraysPHPController.php';
        break;
    case 'implode-php':
        include '../controllers/ImplodePHPController.php';
        break;
    case 'explode-php':
        include '../controllers/ExplodePHPController.php';
        break;
    case 'basico-forms':
        include '../controllers/BasicoFormsController.php';
        break;
    case 'paises-forms':
        include '../controllers/PaisesFormsController.php';
        break;
    case 'about':
        include '../controllers/InfoController.php';
        break;
    default:
        http_response_code(404);
        include '../errors/404.php';
        break;
}

?>