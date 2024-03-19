<?php $current_page = "explode"; ?>

<?php
include '../head.php';
?>

<?php
    $nombres = "Luis,Sebastian,Dylan,Miguel,Román,Belén";
    $nombres_map = explode(",", $nombres);
?>

La variable a parsear es: <br>
<?=$nombres?> <br>
La salidad de var_dump es: <br>
<?php var_dump($nombres_map); ?>

<?php
include '../foot.php';
?>