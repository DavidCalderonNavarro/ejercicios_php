
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificación con progress bar</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">Calificación del alumno</h1>

    <!-- Formulario -->
    <div class="card p-4">

        <form id="formulario" method="POST" novalidate>

            <label for="nota" class="form-label">Introduce tu nota:</label>

            <input type="number" id="nota" name="nota"
                   class="form-control mb-3">

            <button type="submit" class="btn btn-primary">
                Calcular nota
            </button>

        </form>

        <p id="mensaje" class="text-danger mt-3"></p>

    </div>

    <?php

    if (isset($_POST["nota"])) {

        // Recojo la nota
        $nota = $_POST["nota"];

        // Compruebo que sea un número entre 0 y 10
        if (is_numeric($nota) && $nota >= 0 && $nota <= 10
            && floor($nota) == $nota) {

            $nota = (int) $nota;

            // Clasifico la nota
            switch ($nota) {

                case 10:
                case 9:
                    $calificacion = "Tienes un sobresaliente";
                    break;

                case 8:
                case 7:
                    $calificacion = "Tienes un notable";
                    break;

                case 6:
                    $calificacion = "Tienes un bien";
                    break;

                case 5:
                    $calificacion = "Tienes un suficiente";
                    break;

                default:
                    $calificacion = "Tienes un suspenso";
                    break;
            }

            // Calculo el porcentaje de la barra
            $porcentaje = $nota * 10;

            ?>

            <!-- Resultado -->
            <div class="card p-4 mt-4">

                <h3><?php echo $calificacion; ?></h3>

                <p>Tu nota es: <?php echo $nota; ?> / 10</p>

                <div class="progress" role="progressbar"
                     aria-valuenow="<?php echo $porcentaje; ?>"
                     aria-valuemin="0" aria-valuemax="100">

                    <div class="progress-bar"
                         style="width: <?php echo $porcentaje; ?>%">

                        <?php echo $porcentaje; ?>%

                    </div>

                </div>

            </div>

            <?php

        } else {

            echo "<div class='alert alert-danger mt-4'>";
            echo "Nota errónea. Introduce un número entero entre 0 y 10.";
            echo "</div>";

        }

    }

    ?>

</div>

<script>

    // Obtengo el formulario
    const formulario = document.getElementById("formulario");

    // Obtengo el campo de la nota
    const nota = document.getElementById("nota");

    // Obtengo el mensaje
    const mensaje = document.getElementById("mensaje");

    // Evento para validar el formulario
    formulario.addEventListener("submit", function(evento) {

        // Evito el envío del formulario
        evento.preventDefault();

        // Recojo el valor introducido
        const valor = nota.value.trim();

        // Compruebo que no esté vacío
        if (valor === "") {

            mensaje.textContent = "Debes introducir una nota.";
            nota.classList.add("border-danger");

        } else {

            const numero = Number(valor);

            // Compruebo que sea un número entero entre 0 y 10
            if (!Number.isInteger(numero) || numero < 0 || numero > 10) {

                mensaje.textContent =
                    "Introduce un número entero entre 0 y 10.";

                nota.classList.add("border-danger");

            } else {

                // Si es correcto, envío el formulario
                mensaje.textContent = "";
                nota.classList.remove("border-danger");

                formulario.submit();

            }

        }

    });

</script>

</body>
</html>
