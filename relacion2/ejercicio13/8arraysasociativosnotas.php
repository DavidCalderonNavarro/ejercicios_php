<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>

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

            //Declaro los dos arrays asociativos
            $rubrica = [
                "inicial" => 0,
                "primera" => 0,
                "segunda" => 0,
                "tercera" => 0
            ];

            $notasalumno = [
                "inicial" => 6,
                "primera" => 8,
                "segunda" => 4,
                "tercera" => 5
            ];

            //Vuelco el valor de la nota de notasalumno a rubrica
            foreach ($rubrica as $tipo => $nota) {

                $rubrica[$tipo] = $notasalumno[$tipo];
            }

            //Muestro el tipo de nota y su valor
            foreach ($rubrica as $tipo => $nota) {

                echo "En la nota " . $tipo . " saco un " . $nota . "<br>";
            }

            ?>

        </div>
    </div>


</body>

</html>