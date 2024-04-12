<?php

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
    case 'practicas/apache2-tutorial':
        include '../controllers/Apache2TutorialController.php';
        break;
    case 'practicas/blog':
        include '../controllers/BlogController.php';
        break;
    case 'practicas/horario':
        include '../controllers/HorarioController.php';
        break;
    case 'practicas/calificaciones':
        include '../controllers/CalificacionesController.php';
        break;
    case 'practicas/crud-usuarios':
        include '../controllers/CrudUsuariosController.php';
        break;
    case 'practicas/crud-equipos':
        include '../controllers/CrudEquiposController.php';
        break;
    case 'examenes':
        include '../controllers/ExamenesController.php';
        break;
    case 'examenes/tabla-poblaciones':
        include '../controllers/PoblacionesController.php';
        break;
    case 'sesiones':
        include '../controllers/SesionesController.php';
        break;
    case 'sesiones/listas-html':
        include '../controllers/ListasController.php';
        break;
    case 'sesiones/tablas-html':
        include '../controllers/TablasController.php';
        break;
    case 'sesiones/arrays-php':
        include '../controllers/ArraysPHPController.php';
        break;
    case 'sesiones/implode-php':
        include '../controllers/ImplodePHPController.php';
        break;
    case 'sesiones/explode-php':
        include '../controllers/ExplodePHPController.php';
        break;
    case 'sesiones/basico-forms':
        include '../controllers/BasicoFormsController.php';
        break;
    case 'sesiones/paises-forms':
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