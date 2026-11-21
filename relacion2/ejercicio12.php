<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays asociativos notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <h1 class="text-center mb-4">Calificación del alumno</h1>

        <div class="card shadow p-4">

            <form action="" method="POST">

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del alumno</label>
                    <input type="text" class="form-control" id="nombre"
                        name="nombre" required>
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="correo"
                        name="correo" required>
                </div>

                <div class="mb-3">
                    <label for="inicial" class="form-label">Nota inicial</label>
                    <input type="number" class="form-control" id="inicial"
                        name="inicial" min="0" max="10" step="0.01" required>
                </div>

                <div class="mb-3">
                    <label for="primera" class="form-label">Primera nota</label>
                    <input type="number" class="form-control" id="primera"
                        name="primera" min="0" max="10" step="0.01" required>
                </div>

                <div class="mb-3">
                    <label for="segunda" class="form-label">Segunda nota</label>
                    <input type="number" class="form-control" id="segunda"
                        name="segunda" min="0" max="10" step="0.01" required>
                </div>

                <div class="mb-3">
                    <label for="tercera" class="form-label">Tercera nota</label>
                    <input type="number" class="form-control" id="tercera"
                        name="tercera" min="0" max="10" step="0.01" required>
                </div>

                <button type="submit" name="enviar"
                    class="btn btn-primary w-100">
                    Calcular calificación
                </button>

            </form>

        </div>

        <?php

        if (isset($_POST["enviar"])) {

            // Recojo los datos del formulario
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];

            // Declaro los dos arrays asociativos
            $rubrica = [
                "inicial" => 0,
                "primera" => 0,
                "segunda" => 0,
                "tercera" => 0
            ];

            $notasalumno = [
                "inicial" => $_POST["inicial"],
                "primera" => $_POST["primera"],
                "segunda" => $_POST["segunda"],
                "tercera" => $_POST["tercera"]
            ];

            // Vuelco las notas de notasalumno a rubrica
            foreach ($rubrica as $tipo => $nota) {

                $rubrica[$tipo] = $notasalumno[$tipo];
            }

            // Muestro los datos del alumno
            echo "<div class='alert alert-success mt-4'>";
            echo "<h3>Datos del alumno</h3>";
            echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
            echo "<p>Correo: " . htmlspecialchars($correo) . "</p>";

            // Muestro el tipo de nota y su valor
            foreach ($rubrica as $tipo => $nota) {

                echo "En la nota " . $tipo . " saco un " . $nota . "<br>";
            }

            echo "</div>";
        }

        ?>

    </div>

</body>

</html>