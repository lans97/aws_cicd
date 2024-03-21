<?php
$current_page = "paises_busqueda";
include '../head.php';

?>

<h1>Búsqueda país</h1>

<form action="paises_busqueda.php" method="post">
    <div class="row">
        <div class="col-4">
            <label for="pais">País</label>
            <input type="text" name="pais" id="input_pais">
        </div>
        <div class="col-4">
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" id="input_ciudad">
        </div>
        <div class="col-4">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
    </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pais = $_POST['pais'];
    $ciudad = $_POST['ciudad'];
    if (strlen($pais) > 0) {
        $pais = "%" . $pais . "%";
    }
    if (strlen($ciudad) > 0) {
        $ciudad = "%" . $_POST['ciudad'] . "%";
    }
    
    
    include '../php/db.php';
    
    $query = "SELECT
            c.ID as ID,
            p.Code as Code,
            p.Continent as Continent,
            c.Name as City,
            p.Name as Country
            FROM city AS c

            INNER JOIN country AS p ON
            c.CountryCode = p.Code

            WHERE Country LIKE ?
               OR City LIKE ?
            ";
    
    $stmt = $CNX->prepare($query);
    $stmt->execute([$pais, $ciudad]);
    
    $resutl = $stmt->fetchAll();
    
    var_dump($result);
?>

<!-- <table border="1">
    <tr>
        <th>ID</th>
        <th>Código</th>
        <th>Continente</th>
        <th>Ciudad</th>
        <th>País</th>
    </tr>
    <?php foreach ($result as $key => $row) {?>
    <tr>
        <td><?=$row["ID"]?></td>
        <td><?=$row["Code"]?></td>
        <td><?=$row["Continent"]?></td>
        <td><?=$row["City"]?></td>
        <td><?=$row["Country"]?></td>
    </tr>
    <?php } ?>
</table> -->

<?php
}
include '../foot.php';
?>