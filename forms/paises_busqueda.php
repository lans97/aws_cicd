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
                c.Name as City,
                p.Name as Country
                FROM city AS c
                    INNER JOIN country AS p ON
                    c.CountryCode = p.Code
                limit 10";
    
    // $stmt = $CNX->prepare($query);
    // $stmt->execute();
    
    $result = $CNX->query($query);    
    var_dump($result);
?>


<?php
}
include '../foot.php';
?>