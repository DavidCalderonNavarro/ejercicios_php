
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular factorial</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">Calcular factorial</h1>

    <!-- Formulario -->
    <div class="card p-4">

        <form id="formulario" method="POST" novalidate>

            <label for="num" class="form-label">
                Introduce un número entre 1 y 10:
            </label>

            <input type="number" id="num" name="num"
                   class="form-control mb-3">

            <button type="submit" class="btn btn-primary">
                Calcular factorial
            </button>

        </form>

        <p id="mensaje" class="text-danger mt-3"></p>

    </div>

    <?php

    // Compruebo si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Recojo el número introducido
        $num = $_POST["num"] ?? "";

        // Compruebo que sea un entero entre 1 y 10
        if (filter_var($num, FILTER_VALIDATE_INT) !== false
            && $num >= 1 && $num <= 10) {

            $num = (int) $num;
            $suma = 1;

            echo "<div class='card p-4 mt-4'>";

            echo "<h3>Resultado del factorial</h3>";

            // Recorro los números desde 1 hasta el número indicado
            for ($i = 1; $i <= $num; $i++) {

                // Multiplico el número por i
                $multi = $num * $i;

                // Muestro la multiplicación realizada
                echo "(" . $num . " x " . $i . ") = "
                    . $multi . "<br>";

                // Calculo el factorial
                $suma = $suma * $i;

            }

            // Muestro el resultado final
            echo "<hr>";

            echo "<h4>Factorial del número " . $num
                . " = " . $suma . "</h4>";

            echo "</div>";

        } else {

            echo "<div class='alert alert-danger mt-4'>";
            echo "Número incorrecto. Introduce un entero entre 1 y 10.";
            echo "</div>";

        }

    }

    ?>

</div>

<script>

    // Obtengo el formulario
    const formulario = document.getElementById("formulario");

    // Obtengo el campo del número
    const num = document.getElementById("num");

    // Obtengo el mensaje de error
    const mensaje = document.getElementById("mensaje");

    // Evento para validar el formulario
    formulario.addEventListener("submit", function(evento) {

        // Evito el envío inicial
        evento.preventDefault();

        // Recojo el valor introducido
        const valor = num.value.trim();

        // Compruebo que no esté vacío
        if (valor === "") {

            mensaje.textContent = "Debes introducir un número.";

        } else {

            const numero = Number(valor);

            // Compruebo que sea un entero entre 1 y 10
            if (!Number.isInteger(numero) ||
                numero < 1 || numero > 10) {

                mensaje.textContent =
                    "Introduce un número entero entre 1 y 10.";

            } else {

                // Si es correcto, envío el formulario
                mensaje.textContent = "";
                formulario.submit();

            }

        }

    });

</script>

</body>
</html>
