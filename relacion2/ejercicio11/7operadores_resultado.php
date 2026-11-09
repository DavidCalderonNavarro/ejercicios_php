<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <h2 class="text-center mb-4">Resultado del alumno</h2>

                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    // Recogemos los datos enviados desde el formulario
                    $nota1 = (float) $_POST["nota1"];
                    $nota2 = (float) $_POST["nota2"];
                    $faltas = (int) $_POST["faltas"];

                    // Calculamos la media y la nota final
                    $medianotas = ($nota1 + $nota2) / 2;
                    $notafinal = $medianotas - ($faltas * 0.25);

                    echo "<p>Media de las notas: " . $medianotas . "</p>";
                    echo "<p>Nota final: " . $notafinal . "</p>";

                    if ($notafinal >= 5) {
                        echo "<div class='alert alert-success'>El alumno ha aprobado</div>";
                    } else {
                        echo "<div class='alert alert-danger'>El alumno ha suspendido</div>";
                    }

                } else {

                    echo "<div class='alert alert-warning'>";
                    echo "Accede a esta página enviando el formulario.";
                    echo "</div>";

                }

                ?>

                <!-- Botón para volver atras-->
                <a href="7operadores.html" class="btn btn-secondary">
                    Volver al formulario
                </a>

            </div>
        </div>
    </div>

</body>
</html>
