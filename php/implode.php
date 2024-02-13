<?php
    $animales = array(
          0 => "Vaca"
        , 1 => "Pato"
        , 2 => "Gallina"
        , 3 => "Cangrejo"
        , 4 => "Ballena"
    );
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Calificaciones</title>
    </head>

    <body>
    <?php
        echo "var_dump de \$animales: <br>";
        var_dump($animales);
        echo "<br> implode de \$animales: <br>";
        $lista_animales = implode(", ", $animales);
        echo "$lista_animales";
    ?>
    </body>
</html>