<?php
    $archivo = fopen("/home/lanns/Documents/dev/web/aws_cicd/files/registro.csv", "r+");
    $data = fread($archivo, filesize("/home/lanns/Documents/dev/web/aws_cicd/files/registro.csv"));
    fclose($archivo);
    $registros = explode("\n", $data);
    
    $usuarios = array();
    
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


?>