<?php
    function loadPCs() {
        $archivo = fopen("../../files/registroEquipos.csv", "r");
        if (filesize("../../files/registroEquipos.csv") > 0) {
            $data = fread($archivo, filesize("../../files/registroEquipos.csv"));
            fclose($archivo);
        } else {
            return array();
        }
        $registros = explode("\n", $data);
        $equipos = [];

        foreach ($registros as $key => $line) {
            $pc = explode(",", $line);
            $equipos[] = array(
                  "id_equipo" => $pc[0]
                , "id_marca" => $pc[1]
                , "procesador" => $pc[2]
                , "ram" => $pc[3]
                , "disco_duro" => $pc[4]
                , "existencia" => $pc[5]
            );
        }
        return $equipos;
    }

    function savePCs($arr_equipos) {
        $archivo = fopen("../../files/registroEquipos.csv", "w");
        $lines = [];
        foreach ($arr_equipos as $key => $pc) {
            $lines[] = implode(",", $pc);
        }
        $contenido = implode("\n", $lines);
        if (fwrite($archivo, $contenido) === FALSE){
            echo "No se pudo escribir en el archivo";
            exit;
        } else {
            echo "<script> alert(\"El equipo ha sido registrado exitosamente\"</script>";
        }
        fclose($archivo);
    }

    function loadMarcas() {
        $archivo = fopen("../../files/registroMarcas.csv", "r");
        if (filesize("../../files/registroMarcas.csv") > 0) {
            $data = fread($archivo, filesize("../../files/registroMarcas.csv"));
            fclose($archivo);
        } else {
            return array();
        }
        $registros = explode("\n", $data);
        $marcas = [];

        foreach ($registros as $key => $line) {
            $marca = explode(",", $line);
            $marcas[] = array(
                  "id_marca" => $marca[0]
                , "nombre_marca" => $marca[1]
            );
        }
        return $marcas;
    }

    function saveMarcas($arr_marcas) {
        $archivo = fopen("../../files/registroMarcas.csv", "w");
        $lines = [];
        foreach ($arr_marcas as $key => $marca) {
            $lines[] = implode(",", $marca);
        }
        $contenido = implode("\n", $lines);
        if (fwrite($archivo, $contenido) === FALSE){
            echo "No se pudo escribir en el archivo";
            exit;
        } else {
            echo "<script> alert(\"La marca ha sido registrado exitosamente\"</script>";
        }
        fclose($archivo);
    }

    // $tipos_usuario = array(
    //       0 => array (
    //             "id_tipo" => 0
    //           , "desc" => "Administrador"
    //       )
    //     , 1 => array (
    //             "id_tipo" => 1
    //           , "desc" => "Ventas"
    //       )
    //     , 2 => array (
    //             "id_tipo" => 2
    //           , "desc" => "Finanzas"
    //       )
    //     , 3 => array (
    //             "id_tipo" => 3
    //           , "desc" => "Soporte"
    //       )
    //     , 4 => array (
    //             "id_tipo" => 4
    //           , "desc" => "Invitado"
    //       )
    // )
?>