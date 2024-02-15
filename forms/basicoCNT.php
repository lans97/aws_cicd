<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST["usuario"];
    $contrasena = $_POSST["contrasena"];
    
    if($usuario == 'lanns' and $contrasena == "contra123") {
        echo("Bienvenido");
    }
}
header("Location: basico.php");
?>