<?php
include 'db.php';

$query = "SELECT
            c.ID as ID,
            p.Code as Code,
            c.Name as City,
            p.Name as Country
            FROM city AS c
                INNER JOIN country AS p ON
                c.CountryCode = p.Code";

$result = $CNX->query($query);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Código</th>
        <th>Ciudad</th>
        <th>País</th>
    </tr>
    <?php foreach ($result as $key => $row) { ?>
        <tr>
            <td><?= $row["ID"] ?></td>
            <td><?= $row["Code"] ?></td>
            <td><?= $row["City"] ?></td>
            <td><?= $row["Country"] ?></td>
        </tr>
    <?php } ?>

</table>