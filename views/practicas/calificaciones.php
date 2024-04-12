<?php
$materias = array(
  0 => array(
    "nombre" => "Cálculo 1", "calif" => 7, "semestre" => 1
  ), 1 => array(
    "nombre" => "Física Universitaria 1", "calif" => 8, "semestre" => 1
  ), 2 => array(
    "nombre" => "Fundamentos de Programación", "calif" => 9, "semestre" => 1
  ), 3 => array(
    "nombre" => "Cálculo 2", "calif" => 7, "semestre" => 2
  ), 4 => array(
    "nombre" => "Física Universitaria 2", "calif" => 9, "semestre" => 2
  ), 5 => array(
    "nombre" => "Álgebra Lineal", "calif" => 9, "semestre" => 2
  ), 6 => array(
    "nombre" => "Taller de Comunicación", "calif" => 10, "semestre" => 2
  ), 7 => array(
    "nombre" => "Cálculo 3", "calif" => 10, "semestre" => 3
  ), 8 => array(
    "nombre" => "Ingeniería de Circuitos 1", "calif" => 10, "semestre" => 4
  ), 9 => array(
    "nombre" => "Persona y Humnaismo", "calif" => 8, "semestre" => 5
  ), 10 => array(
    "nombre" => "Dinámica de Procesos", "calif" => 9, "semestre" => 6
  ), 11 => array(
    "nombre" => "Aplicaciones Móviles", "calif" => 8, "semestre" => 7
  )
);
?>

<table border="1">
  <tr>
    <th>Materia</th>
    <th>Semestre</th>
    <th>Calificación</th>
  </tr>
  <?php foreach ($materias as $key => $materia) { ?>
    <tr>
      <td><?= $materia["nombre"] ?></td>
      <td><?= $materia["semestre"] ?></td>
      <td><?= $materia["calif"] ?></td>
    </tr>
  <?php } ?>
</table>