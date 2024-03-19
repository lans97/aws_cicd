<?php $current_page = "arrays"; ?>

<?php
include '../head.php';
?>

<?php
    $pais1 = array(
          "pais" => "México"
        , "poblacion" => "126,000,000"
    );
    $pais2 = array(
          "pais" => "República Democrática del Congo"
        , "poblacion" => "95,000,000"
    );
    $pais3 = array(
          "pais" => "Inglaterra"
        , "poblacion" => "55,000,000"
    );

    $paises = array(
          0 => $pais1
        , 1 => $pais2
        , 2 => $pais3
    );
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Arreglos PHP</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>País</th>
            <th>Población</th>
        </tr>
        <?php foreach ($paises as $key => $pais) {?>
        <tr>
            <td><?= $pais["pais"]; ?></td>
            <td><?= $pais["poblacion"]; ?></td>
        </tr>
        <?php } ?>
    </table>

<?php
include '../foot.php';
?>