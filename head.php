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
                    <a class="navbar-brand" href="#">Arquitectura Web</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?php print ($current_page=="home") ? "active" : "" ?>" href="#">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link <?php print ($current_page=="practicas") ? "active" : "" ?> dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Prácticas
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item <?php print ($current_page=="apache2") ? "active" : "" ?>" href="#">Apache2</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="blog") ? "active" : "" ?>" href="#">Blog</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="horario") ? "active" : "" ?>" href="#">Horario</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="calificaciones") ? "active" : "" ?>" href="#">Calificaciones</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="crudusuarios") ? "active" : "" ?>" href="#">CRUD Usuarios</a></li>
                                    <li><h6 class="dropdown-header">CRUD Equipos</h6></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="crudpcs") ? "active" : "" ?>" href="#">CRUD PCs</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="crudmarcas") ? "active" : "" ?>" href="#">CRUD Marcas</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php print ($current_page=="examenes") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Exámenes
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item <?php print ($current_page=="tablapoblaciones") ? "active" : "" ?>" href="#">Tabla poblaciones</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php print ($current_page=="html") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    HTML
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item <?php print ($current_page=="listas") ? "active" : "" ?>" href="#">Listas</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="tablas") ? "active" : "" ?>" href="#">Tablas</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php print ($current_page=="php") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    PHP
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item <?php print ($current_page=="phphtml") ? "active" : "" ?>" href="#">HTML</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="mysqli") ? "active" : "" ?>" href="#">MySQLi</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="arrays") ? "active" : "" ?>" href="#">Arrays</a></li>
                                    <li><a class="dropdown-item <?php print ($current_page=="arrayimplode") ? "active" : "" ?>" href="#">Array Implode</a></li>
                                </ul>
                            </li>
                        </ul>
                            <a class="nav-link nav-dark <?php print ($current_page=="info") ? "active" : "" ?>" href="#">info</a>
                    </div>
                </div>
            </nav>
        </div>