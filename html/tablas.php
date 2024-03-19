<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title> Tablas </title>
    </head>

    <body>
        <h1> Tablas HTML </h1>
        <h2> Ejemplo 1 </h2>
        <p>
        Column span
        </p>
        <table width="300" border="1">
            <thead>
                <tr>
                    <th width="100">Enero</th>
                    <th width="150">Febrero</th>
                    <th>Marzo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cine</td>
                    <td>Boliche</td>
                    <td>Teatro</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Asistí</td>
                    <td>No Asistí</td>
                    <td>Asistí</td>
                </tr>
            </tfoot>
        </table>

        <h2> Ejemplo 2 </h2>

        <table border="1">
            <tr>
                <th></th>
                <th>9:00</th>
                <th>10:00</th>
                <th>11:00</th>
                <th>12:00</th>
            </tr>
            <tr>
                <th> Lunes </th>
                <td colspan="2">Circuitos</td>
                <td> Programación </td>
                <td> Reflexión </td>
            </tr>
            <tr>
                <th> Martes </th>
                <td colspan="3"> Laboratorio de Telecom </td>
                <td> Tarea </td>
            </tr>
        </table>
        
        <h2> Ejemplo 3 </h2>

        <p>
        Row span
        </p>

        <table border="1">
            <tr>
                <th></th>
                <th> CANAL 1 </th>
                <th> CANAL 2 </th>
                <th> CANAL 3 </th>
            </tr>
            <tr>
                <th> 07:00 a 8:00 </th>
                <td rowspan="2"> Película </td>
                <td> Americano </td>
                <td> Béisbol </td>
            </tr>
            <tr>
                <th> 08:00 a 9:00 </th>
                <td> Noticias </td>
                <td> Comedia </td>
            </tr>
        </table>

    </body>

</html>
