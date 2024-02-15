<?php
    $nombres = "Luis,Sebastian,Dylan,Miguel,Román,Belén";
    $nombres_map = explode(",", $nombres);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Calificaciones</title>
    </head>

    <body>
        La variable a parsear es: <br>
        <?=$nombres?> <br>
        La salidad de var_dump es: <br>
        <?php var_dump($nombres_map); ?>
    </body>
</html>