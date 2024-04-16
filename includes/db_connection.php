<?php
require_once PROJECT_ROOT . 'config/database.php';

try {
    $dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4";
    global $cnx;
    $cnx = new PDO($dsn, $username, $password, $options);
} catch (Exception $e) {
    echo "Error de conexión con la base de datos: $e";
    exit();
}
?>