<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Arquitectura Web </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="bg-dark">
            <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href='/'>Arquitectura Web</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?php print ($current_page=="home") ? "active" : "" ?>" href='/'>Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link <?php print ($current_page=="practicas") ? "active" : "" ?> dropdown-toggle" href='#' role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Prácticas
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href='/practicas/apache2-tutorial'>Apache2</a></li>
                                    <li><a class="dropdown-item" href='/practicas/blog'>Blog</a></li>
                                    <li><a class="dropdown-item" href='/practicas/horario'>Horario</a></li>
                                    <li><a class="dropdown-item" href='practicas/calificaciones'>Calificaciones</a></li>
                                    <li><a class="dropdown-item" href='/practicas/crud-usuarios'>CRUD Usuarios</a></li>
                                    <li><a class="dropdown-item" href='/practicas/crud-equipos'>CRUD PCs</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href='#' role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Exámenes
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href='/examenes/tabla-poblaciones'>Tabla poblaciones</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href='#' role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    HTML
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href='/sesiones/listas-html'>Listas</a></li>
                                    <li><a class="dropdown-item" href='/sesiones/tablas-html'>Tablas</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href='#' role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    PHP
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href='/sesiones/arrays-php'>Arrays</a></li>
                                    <li><a class="dropdown-item" href='/sesiones/implode-php'>Implode</a></li>
                                    <li><a class="dropdown-item" href='/sesiones/explode-php'>Explode</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href='#' role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Forms
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href='/sesiones/basico-forms'>Básico</a></li>
                                    <li><a class="dropdown-item" href='/sesiones/paises-forms'>Busqueda de Países</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                                <a class="nav-link" href="/info.php">Info</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container">