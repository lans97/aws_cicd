<?php
    function loadUsers() {
        $archivo = fopen("../../files/registroUsuarios.csv", "r");
        if (filesize("../../files/registroUsuarios.csv") > 0) {
            $data = fread($archivo, filesize("../../files/registroUsuarios.csv"));
            fclose($archivo);
        } else {
            return array();
        }
        $registros = explode("\n", $data);
        $usuarios = [];

        foreach ($registros as $key => $line) {
            $usr = explode(",", $line);
            $usuarios[] = array(
                  "id" => $usr[0]
                , "username" => $usr[1]
                , "nombre" => $usr[2]
                , "apaterno" => $usr[3]
                , "amaterno" => $usr[4]
                , "correo" => $usr[5]
                , "tipo_usuario" => $usr[6]
            );
        }
        return $usuarios;
    }

    function saveUsers($arr_usuarios) {
        $archivo = fopen("../../files/registroUsuarios.csv", "w");
        $lines = [];
        foreach ($arr_usuarios as $key => $usuario) {
            $lines[] = implode(",", $usuario);
        }
        $contenido = implode("\n", $lines);
        if (fwrite($archivo, $contenido) === FALSE){
            echo "No se pudo escribir en el archivo";
            exit;
        } else {
            echo "<script> alert(\"El usuario ha sido registrado exitosamente\"</script>";
        }
        fclose($archivo);
    }

    $tipos_usuario = array(
          0 => array (
                "id_tipo" => 0
              , "desc" => "Administrador"
          )
        , 1 => array (
                "id_tipo" => 1
              , "desc" => "Ventas"
          )
        , 2 => array (
                "id_tipo" => 2
              , "desc" => "Finanzas"
          )
        , 3 => array (
                "id_tipo" => 3
              , "desc" => "Soporte"
          )
        , 4 => array (
                "id_tipo" => 4
              , "desc" => "Invitado"
          )
    )
?>