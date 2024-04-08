<?php $current_page = "arrayimplode"; ?>

<?php
include '../head.php';
?>

<?php
    $animales = array(
          0 => "Vaca"
        , 1 => "Pato"
        , 2 => "Gallina"
        , 3 => "Cangrejo"
        , 4 => "Ballena"
    );
?>

<?php
    echo "var_dump de \$animales: <br>";
    var_dump($animales);
    echo "<br> implode de \$animales: <br>";
    $lista_animales = implode(", ", $animales);
    echo "$lista_animales";
?>

<?php
include '../foot.php';
?>