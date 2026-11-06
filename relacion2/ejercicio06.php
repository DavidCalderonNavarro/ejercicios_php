<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <table class="table table-striped table-hover table-bordered">

        <!-- Cabecera de la tabla -->
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Ciudad</th>
            </tr>
        </thead>

        <tbody>

            <?php

            // Abro el archivo CSV
            $archivo = __DIR__ . "/personas.csv";

            if (($fichero = fopen($archivo, "r")) !== false) {

                // Me salto la primera fila del CSV
                fgetcsv($fichero, 1000, ",");

                $contador = 1;

                // Recorro cada persona del archivo
                while (($persona = fgetcsv($fichero, 1000, ",")) !== false) {

                    echo "<tr>";

                    echo "<th scope='row'>" . $contador . "</th>";
                    echo "<td>" . htmlspecialchars($persona[0]) . "</td>";
                    echo "<td>" . htmlspecialchars($persona[1]) . "</td>";
                    echo "<td>" . htmlspecialchars($persona[2]) . "</td>";
                    echo "<td>" . htmlspecialchars($persona[3]) . "</td>";
                    echo "<td>" . htmlspecialchars($persona[4]) . "</td>";

                    echo "</tr>";

                    $contador++;
                }

                fclose($fichero);
            };

            ?>

        </tbody>
    </table>


    ?>

</body>

</html>