<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST["usuario"];
    $contrasena = $_POSST["contrasena"];
    
    if($usuario == "lanns" && $contrasena == "contra123") {
        echo("Bienvenido");
    }
    else {
        echo("Nope");
    }
}
?>