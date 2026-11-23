<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <h2 class="text-center mb-4">Calificaciones del alumno</h2>

        <div class="card p-4 shadow">

            <form method="POST" action="" class="needs-validation">

                <div class="mb-3">
                    <label class="form-label">Nombre del alumno</label>
                    <input type="text" name="nombre"
                        class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" name="correo"
                        class="form-control" required>
                </div>

                <h5 class="mb-3">Introduce las notas (de 0 a 10)</h5>

                <div class="mb-3">
                    <label class="form-label">Nota inicial</label>
                    <input type="number" name="inicial"
                        class="form-control" min="0" max="10" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Primera nota</label>
                    <input type="number" name="primera"
                        class="form-control" min="0" max="10" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Segunda nota</label>
                    <input type="number" name="segunda"
                        class="form-control" min="0" max="10" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tercera nota</label>
                    <input type="number" name="tercera"
                        class="form-control" min="0" max="10" required>
                </div>

                <button type="submit" name="enviar"
                    class="btn btn-primary w-100">
                    Calcular calificación
                </button>

            </form>

            <?php

            if (isset($_POST["enviar"])) {

                $nombre = trim($_POST["nombre"]);
                $correo = trim($_POST["correo"]);

                // Recogemos las notas introducidas
                $notasalumno = [
                    "inicial" => $_POST["inicial"],
                    "primera" => $_POST["primera"],
                    "segunda" => $_POST["segunda"],
                    "tercera" => $_POST["tercera"]
                ];

                // Array asociativo de la rúbrica
                $rubrica = [
                    "inicial" => 0,
                    "primera" => 0,
                    "segunda" => 0,
                    "tercera" => 0
                ];

                 if ($nombre == "") {
                    $errores[] = "El nombre no puede estar vacío.";
                }

                if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                    $errores[] = "El correo electrónico no es válido.";
                }// Comprobamos el nombre y el correo
                $errores = [];

               

                // Comprobamos las notas
                foreach ($notasalumno as $tipo => $nota) {

                    if (
                        !is_numeric($nota) ||
                        $nota < 0 || $nota > 10
                    ) {

                        $errores[] = "La nota " . $tipo .
                            " debe estar entre 0 y 10.";
                    }
                }

                if (empty($errores)) {

                    // Pasamos las notas al array rúbrica
                    foreach ($rubrica as $tipo => $nota) {

                        $rubrica[$tipo] = (float) $notasalumno[$tipo];
                    }

                    echo '<div class="alert alert-success mt-4">';

                    echo "<h4>Datos del alumno</h4>";

                    echo "Nombre: " .
                        htmlspecialchars($nombre) . "<br>";

                    echo "Correo: " .
                        htmlspecialchars($correo) . "<br><br>";

                    echo "<h5>Notas obtenidas</h5>";

                    // Mostramos las notas
                    foreach ($rubrica as $tipo => $nota) {

                        echo "En la nota " . $tipo .
                            " ha sacado un " . $nota . "<br>";
                    }

                    echo '</div>';
                } else {

                    echo '<div class="alert alert-danger mt-4">';
                    echo "<h5>Se han encontrado errores:</h5>";

                    foreach ($errores as $error) {

                        echo htmlspecialchars($error) . "<br>";
                    }

                    echo '</div>';
                }
            }

            ?>

        </div>
    </div>

</body>

</html>