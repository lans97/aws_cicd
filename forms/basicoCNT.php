<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $tipo_usuario = $_POST["tipo_usuario"];
    
    if($usuario == "lanns" && $contrasena == "contra123") {
        echo("Bienvenido, ");
        switch ($tipo_usuario) {
            case '0':
                echo "administrador.";
                break;
            case '1':
                echo "invitado.";
                break;
            case '2':
                echo "ventas.";
                break;
            case '3':
                echo "finanzas.";
                break;
            
            default:
                echo "";
                break;
        }
    }
    else {
        header("Location: basico.php");
    }
}
?>