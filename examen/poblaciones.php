<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title> Arquitectura Web </title>
</head>

<body>
    <table border="1">
        <tr>
            <th>País</th>
            <th>Población</th>
        </tr>
        <?php
            $paises = array(
                0 => "México"
                , 1 => "Alemania"
                , 2 => "Chile"
                , 3 => "Emiratos Arabes Unidos"
                , 4 => "China"
            );

            $poblacion = array(
                0 => "120,000,000"
                , 1 => "50,000,000"
                , 2 => "30,000,000"
                , 3 => "70,000,000"
                , 4 => "1,000,000,000"
            );

            foreach ($paises as $key => $value) {
                echo "<tr>";
                echo "<td>$value</td>";
                echo "<td>$poblacion[$key]</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>