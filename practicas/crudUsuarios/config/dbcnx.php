<?php
$servername = "localhost";
$username = "cruds";
$password = "G4u7acKhVge5b5";
$database = "arqwebp24";

$options = array(
      PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION
    , PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC
    , PDO::ATTR_EMULATE_PREPARES    => true
);

try {
    $dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4";
    $cnx = new PDO($dsn, $username, $password, $options);
} catch (Exception $e) {
    echo "upsi: $e";
    exit();
}
?>