<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>

</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <h2 class="text-center text-primary mb-4">Resultado</h2>

                <?php

                // Recogemos los datos enviados desde formulario.html mediante POST

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $n1 = (float) $_POST["n1"];
                    $n2 = (float) $_POST["n2"];
                    $op = $_POST["op"];

                    // Evitamos dividir o calcular el módulo entre cero

                    if (($op == "/" || $op == "%") && $n2 == 0) {

                        echo "<div class='alert alert-danger'>";
                        echo "No se puede dividir entre cero";
                        echo "</div>";

                    } else {

                        // Calculamos según el operador seleccionado

                        $resultado = match ($op) {
                            "+" => $n1 + $n2,
                            "-" => $n1 - $n2,
                            "*" => $n1 * $n2,
                            "/" => $n1 / $n2,
                            "%" => (int) $n1 % (int) $n2,
                            default => "Operador no válido"
                        };

                        echo "<h4 class='text-center text-primary'>";
                        echo "El resultado es: " . htmlspecialchars((string) $resultado);
                        echo "</h4>";

                    }

                } else {

                    echo "<div class='alert alert-warning'>";
                    echo "Accede a esta página enviando el formulario.";
                    echo "</div>";

                }

                ?>

                <!-- Botón para volver atras-->
                <div class="text-center mt-4">
                    <a href="Formulario.html" class="btn btn-secondary">
                        Volver a la calculadora
                    </a>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
