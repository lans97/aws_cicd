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
    <td>
        <th>ID</th>
        <th>Code</th>
        <th>Name</th>
    </td>
    <td>
    <?php foreach ($result as $key => $row) {?>
        <tr><?=$row["ID"]?></tr>
        <tr><?=$row["Code"]?></tr>
        <tr><?=$row["Name"]?></tr>
    <?php } ?>
    </td>

</table>

<?php
include '../foot.php';
?>