
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>División entera</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">División entera</h1>

    <!-- Formulario -->
    <div class="card p-4">

        <form id="formulario" method="POST" novalidate>

            <div class="mb-3">
                <label for="dividendo" class="form-label">
                    Dividendo:
                </label>

                <input type="number" id="dividendo" name="dividendo"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label for="divisor" class="form-label">
                    Divisor:
                </label>

                <input type="number" id="divisor" name="divisor"
                       class="form-control">
            </div>

            <p>¿Qué quieres calcular?</p>

            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox"
                       id="cociente" name="cociente" value="1">

                <label class="form-check-label" for="cociente">
                    Cociente
                </label>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox"
                       id="resto" name="resto" value="1">

                <label class="form-check-label" for="resto">
                    Resto
                </label>
            </div>

            <button type="submit" class="btn btn-primary">
                Calcular
            </button>

        </form>

        <p id="mensaje" class="text-danger mt-3"></p>

    </div>

    <?php

    // Compruebo si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Recojo los datos
        $dividendo = $_POST["dividendo"] ?? "";
        $divisor = $_POST["divisor"] ?? "";

        $cocienteSeleccionado = isset($_POST["cociente"]);
        $restoSeleccionado = isset($_POST["resto"]);

        // Compruebo que los números sean enteros positivos
        $dividendoValido = filter_var(
            $dividendo,
            FILTER_VALIDATE_INT
        );

        $divisorValido = filter_var(
            $divisor,
            FILTER_VALIDATE_INT
        );

        if ($dividendoValido === false || $dividendoValido < 1
            || $divisorValido === false || $divisorValido < 1) {

            echo "<div class='alert alert-danger mt-4'>";
            echo "Los números deben ser enteros positivos.";
            echo "</div>";

        } elseif (!$cocienteSeleccionado && !$restoSeleccionado) {

            echo "<div class='alert alert-danger mt-4'>";
            echo "Debes seleccionar al menos una opción.";
            echo "</div>";

        } else {

            // Convierto los datos a enteros
            $dividendo = (int) $dividendo;
            $divisor = (int) $divisor;

            // Declaro el cociente
            $cociente = 0;

            // Realizo la división mediante restas sucesivas
            while ($dividendo >= $divisor) {

                $dividendo = $dividendo - $divisor;
                $cociente++;

            }

            // El dividendo restante es el resto
            $resto = $dividendo;

            echo "<div class='card p-4 mt-4'>";

            echo "<h3>Resultado de la división</h3>";

            // Muestro el cociente si se ha seleccionado
            if ($cocienteSeleccionado) {

                echo "<p>El cociente es: "
                    . $cociente . "</p>";

            }

            // Muestro el resto si se ha seleccionado
            if ($restoSeleccionado) {

                echo "<p>El resto es: "
                    . $resto . "</p>";

            }

            echo "</div>";

        }

    }

    ?>

</div>

<script>

    // Obtengo el formulario
    const formulario = document.getElementById("formulario");

    // Obtengo los campos numéricos
    const dividendo = document.getElementById("dividendo");
    const divisor = document.getElementById("divisor");

    // Obtengo las casillas
    const cociente = document.getElementById("cociente");
    const resto = document.getElementById("resto");

    // Obtengo el mensaje
    const mensaje = document.getElementById("mensaje");

    // Función para comprobar números enteros positivos
    function comprobarNumero(campo) {

        const valor = campo.value.trim();

        if (valor === "") {
            return false;
        }

        const numero = Number(valor);

        return Number.isInteger(numero) && numero > 0;

    }

    // Evento para validar el formulario
    formulario.addEventListener("submit", function(evento) {

        // Evito el envío inicial
        evento.preventDefault();

        // Compruebo el dividendo
        if (!comprobarNumero(dividendo)) {

            mensaje.textContent =
                "El dividendo debe ser un entero positivo.";

            return;

        }

        // Compruebo el divisor
        if (!comprobarNumero(divisor)) {

            mensaje.textContent =
                "El divisor debe ser un entero positivo.";

            return;

        }

        // Compruebo que haya al menos una casilla seleccionada
        if (!cociente.checked && !resto.checked) {

            mensaje.textContent =
                "Debes seleccionar el cociente, el resto o ambos.";

            return;

        }

        // Si todo es correcto, envío el formulario
        mensaje.textContent = "";
        formulario.submit();

    });

</script>

</body>
</html>
