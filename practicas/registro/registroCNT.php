<?php
    include 'csvDB.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST["username"];
        $nombre = $_POST["nombre"];
        $apaterno = $_POST["apaterno"];
        $amaterno = $_POST["amaterno"];
        $correo = $_POST["correo"];
        $tipo_usuario = $_POST["tipo_usuario"];
        $contrasena = $_POST["contrasena"];
    }
    
    $arr_usuarios = loadUsers();

    if (filesize("../../files/registro.csv") == 0) {
        $id = 0;
    } else {
        $id = sizeof($arr_usuarios);
    }
    
    $contains = false;
    foreach ($arr_usuarios as $key => $usr) {
        if (in_array($username, $usr)) {
            $contains = true;
        }
    }
    if ($contains){
        echo "<script>";
        echo "alert('El nombre de usuario ya está registrado');";
        echo "window.location.href = 'register.php';";
        echo "</script>";
    } else {
        $nuevo_usuario = array(
              "id" => $id
            , "username" => $username
            , "nombre" => $nombre
            , "apaterno" => $apaterno
            , "amaterno" => $amaterno
            , "correo" => $correo
            , "tipo_usuario" => $tipo_usuario
        );

        $arr_usuarios[] = $nuevo_usuario;
    }
    
    saveUsers($arr_usuarios);

?>