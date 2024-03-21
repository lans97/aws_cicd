<?php $current_page = "ciudades"; ?>

<?php
include '../head.php';
?>

<?php
include 'db.php';

$query = "SELECT
            c.ID,
            p.Code,
            c.Name,
            p.Name
            FROM city AS c
                INNER JOIN country AS p ON
                c.CountryCode = p.Code";
                
$result = $CNX->query($query);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Code</th>
        <th>Name</th>
    </tr>
    <?php foreach ($result as $key => $row) {?>
    <tr>
        <td><?=$row["ID"]?></td>
        <td><?=$row["Code"]?></td>
        <td><?=$row["Name"]?></td>
    </tr>
    <?php } ?>

</table>

<?php
include '../foot.php';
?>