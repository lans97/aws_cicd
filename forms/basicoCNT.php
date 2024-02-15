<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    
    if($usuario == "lanns" && $contrasena == "contra123") {
        echo("Bienvenido");
    }
    else {
        header("Location: basico.php");
    }
}
?>