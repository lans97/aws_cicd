<?php
$servername = "localhost";
$username = "worldapp";
$password = "securepass";
$database = "world";

$options = array(
      PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION
    , PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC
    , PDO::ATTR_EMULATE_PREPARES    => true
);

try {
    $dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4";
    $CNX = new PDO($dsn, $username, $password, $options);
} catch (Exception $e) {
    echo "upsi: $e";
    exit();
}
// $conn = new mysqli($servername, $username, $password);

// if($conn->connect_error) {
//     die("Connection Failed: " . $conn->connect_error);
// }
// echo "Connected succesfully";
?>

<h1>Conectado</h1>