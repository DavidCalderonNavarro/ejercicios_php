
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos y divisores</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        .divisor {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">Primos y divisores</h1>

    <!-- Formulario de entrada -->
    <div class="card p-4">

        <form id="formulario" method="POST" novalidate>

            <div class="mb-3">
                <label for="num" class="form-label">
                    Introduce un número entero positivo:
                </label>

                <input type="number" id="num" name="num"
                       class="form-control">
            </div>

            <p>¿Qué quieres hacer?</p>

            <div class="form-check mb-2">
                <input class="form-check-input" type="radio"
                       name="opcion" id="primo" value="primo">

                <label class="form-check-label" for="primo">
                    Comprobar si es primo
                </label>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="radio"
                       name="opcion" id="divisores" value="divisores">

                <label class="form-check-label" for="divisores">
                    Mostrar sus divisores
                </label>
            </div>

            <button type="submit" class="btn btn-primary">
                Ejecutar
            </button>

        </form>

        <p id="mensaje" class="text-danger mt-3"></p>

    </div>

    <?php

    // Compruebo si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Recojo los datos
        $num = $_POST["num"] ?? "";
        $opcion = $_POST["opcion"] ?? "";

        // Compruebo que el número sea un entero positivo
        $numero = filter_var($num, FILTER_VALIDATE_INT);

        if ($numero === false || $numero < 1) {

            echo "<div class='alert alert-danger mt-4'>";
            echo "El número debe ser un entero positivo.";
            echo "</div>";

        } elseif ($opcion != "primo" && $opcion != "divisores") {

            echo "<div class='alert alert-danger mt-4'>";
            echo "Debes seleccionar una opción.";
            echo "</div>";

        } else {

            echo "<div class='card p-4 mt-4'>";

            // Opción 1: comprobar si es primo
            if ($opcion == "primo") {

                echo "<h3>Comprobar número primo</h3>";

                $primo = true;

                // Un número primo debe ser mayor o igual a 2
                if ($numero >= 2) {

                    for ($i = 2; $i < $numero; $i++) {

                        if ($numero % $i == 0) {

                            $primo = false;
                            break;

                        }

                    }

                    if ($primo == true) {

                        echo "Tu número es primo.";

                    } else {

                        echo "Tu número no es primo.";

                    }

                } else {

                    echo "El número debe ser mayor o igual a 2.";

                }

            // Opción 2: mostrar divisores
            } elseif ($opcion == "divisores") {

                echo "<h3>Divisores del número $numero</h3>";

                for ($i = 1; $i <= $numero; $i++) {

                    if ($numero % $i == 0) {

                        echo "<span class='divisor'>$i</span> ";

                    } else {

                        echo "$i ";

                    }

                }

            }

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

    // Obtengo el mensaje
    const mensaje = document.getElementById("mensaje");

    // Obtengo los radio buttons
    const opciones = document.querySelectorAll('input[name="opcion"]');

    // Evento para validar el formulario
    formulario.addEventListener("submit", function(evento) {

        // Evito el envío inicial
        evento.preventDefault();

        // Recojo el valor del número
        const valor = num.value.trim();

        // Compruebo que no esté vacío
        if (valor === "") {

            mensaje.textContent = "Debes introducir un número.";
            return;

        }

        const numero = Number(valor);

        // Compruebo que sea un entero positivo
        if (!Number.isInteger(numero) || numero < 1) {

            mensaje.textContent =
                "Introduce un número entero positivo.";

            return;

        }

        // Compruebo que se haya seleccionado una opción
        let seleccionada = false;

        opciones.forEach(function(opcion) {

            if (opcion.checked) {
                seleccionada = true;
            }

        });

        if (!seleccionada) {

            mensaje.textContent = "Debes seleccionar una opción.";
            return;

        }

        // Si todo es correcto, envío el formulario
        mensaje.textContent = "";
        formulario.submit();

    });

</script>

</body>
</html>
