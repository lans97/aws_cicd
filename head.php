<?php
$project_root = __DIR__;
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Arquitectura Web </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                                    <li><a class="dropdown-item <?php print ($current_page=="apache2") ? "active" : "" ?>" href='/practicas/apache2.php'>Apache2</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="blog") ? "active" : "" ?>" href='/practicas/blog.php'>Blog</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="horario") ? "active" : "" ?>" href='/practicas/horario.php'>Horario</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="calificaciones") ? "active" : "" ?>" href='/practicas/calificaciones.php'>Calificaciones</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="crudusuarios") ? "active" : "" ?>" href='/practicas/crudUsuarios/crud.php'>CRUD Usuarios</a></li>
                                    <li><h6 class="dropdown-header">CRUD Equipos</h6></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="crudpcs") ? "active" : "" ?>" href='/practicas/crudPCs/crudEquipos.php'>CRUD PCs</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="crudmarcas") ? "active" : "" ?>" href='/practicas/crudPCs/crudMarcas.php'>CRUD Marcas</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php print ($current_page=="examenes") ? "active" : "" ?>" href='#' role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Exámenes
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item <?php print ($current_page=="tablapoblaciones") ? "active" : "" ?>" href='/examen/poblaciones.php'>Tabla poblaciones</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php print ($current_page=="html") ? "active" : "" ?>" href='#' role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    HTML
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item <?php print ($current_page=="listas") ? "active" : "" ?>" href='/html/listas.php'>Listas</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="tablas") ? "active" : "" ?>" href='/html/tablas.php'>Tablas</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php print ($current_page=="php") ? "active" : "" ?>" href='#' role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    PHP
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item <?php print ($current_page=="phphtml") ? "active" : "" ?>" href='/php/html_template.php'>HTML</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="ciudades") ? "active" : "" ?>" href='/php/ciudades.php'>MariaDB</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="arrays") ? "active" : "" ?>" href='/php/arrays.php'>Arrays</a></li>
                                <li><a class="dropdown-item <?php print ($current_page=="arrayimplode") ? "active" : "" ?>" href='/php/implode.php'>Array Implode</a></li>
                                </ul>
                            </li>
                        </ul>
                            <span class="nav-item">
                                <a class='nav-link bg-dark <?php print ($current_page=="info") ? "active" : "" ?>' href='/info.php'>info</a>
                            </span>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container">