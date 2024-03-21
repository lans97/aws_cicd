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
        <tr>holi</tr>
        <tr>prueba</tr>
        <tr>yes</tr>
    </td>

</table>

<?php
include '../foot.php';
?>