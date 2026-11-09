<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>

</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <h2 class="text-center text-primary mb-4">Calculadora</h2>

                <form method="get" action="">
                    <!-- Campo para el primer número -->
                    <div>
                        <label for="n1">Número 1:</label>
                        <input type="number" step="any" name="n1" id="n1">
                    </div>
                    <!-- Campo para el operador -->
                    <div>
                        <label for="op">Operador:</label>
                        <select name="op" id="op" class="form-select">
                            <option value="0">Elige operador</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </div>
                    <!-- Campo para el segundo número -->
                    <div>
                        <label for="n2">Número 2:</label>
                        <input type="number" step="any" name="n2" id="n2">
                    </div>

                    <!-- Botón para calcular -->
                    <div>
                        <button type="submit" name="submit">
                            Calcular
                        </button>
                    </div>

                </form>

                <?php

                // Comprobamos si se ha enviado el formulario

                if (isset($_GET["submit"])) {

                    // Recogemos los datos

                    if (
                        isset($_GET["n1"], $_GET["n2"], $_GET["op"]) &&
                        $_GET["n1"] !== "" &&
                        $_GET["n2"] !== ""
                    ) {

                        $n1 = (float) $_GET["n1"];
                        $n2 = (float) $_GET["n2"];
                        $op = $_GET["op"];

                        // Comprobamos si se intenta dividir entre cero

                        if (($op == "/" || $op == "%") && $n2 == 0) {

                            echo "<div class='alert alert-danger mt-3'>";
                            echo "No se puede dividir entre cero";
                            echo "</div>";
                        } else {

                            // Realizamos la operación con match

                            $resultado = match ($op) {
                                "+" => $n1 + $n2,
                                "-" => $n1 - $n2,
                                "*" => $n1 * $n2,
                                "/" => $n1 / $n2,
                                "%" => (int) $n1 % (int) $n2,
                                "0" => "No has elegido operador",
                                default => "Operador no válido"
                            };

                            echo "<h4 class='text-center text-primary mt-4'>";
                            echo "El resultado es: " . htmlspecialchars((string) $resultado);
                            echo "</h4>";
                        }
                    } else {

                        echo "<div class='alert alert-danger mt-3'>";
                        echo "Debes introducir los dos números";
                        echo "</div>";
                    }
                }

                ?>

            </div>
        </div>
    </div>

</body>

</html>