<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="n1">Numero 1: </label>
                        <input type="number" name="n1" id="n1">
                    </div>
                    <div class="mb-3">
                        <select name="op" aria-label="Default select example">
                            <option selected value="0">Elige operador</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="n2">Numero 2: </label>
                        <input type="number" name="n2" id="n2">
                    </div>
                    <button type="submit" name="submit">Calcular</button>
                </form>
                <!-- Aqui se procesan los datos al pulsar el botón enviar -->

                <?php

                if (isset($_GET["submit"])) {

                    // zona de "descarga" de datos

                    $n1 = (float)$_GET["n1"]; // Podría dar error si no introduzco número en formulario
                    $n2 = (float)$_GET["n2"]; // Podría dar error si no introduzco número en formulario
                    $op = $_GET["op"];

                    $resultado = match ($op) {
                        "+" => $n1 + $n2,
                        "-" => $n1 - $n2,
                        "*" => $n1 * $n2,
                        "/" => $n1 / $n2,
                        "%" => (int) $n1 % (int) $n2,
                        "0" => "No has elegido operador"
                    };

                    echo "<h4 class = 'text-center text-primary mt-2'>El resultado es: $resultado</h4>";
                }

                ?>
            </div>
            <div class="col-md-3 col-sm-1 clo-0">
                <!-- Aqui va un espacio en blanco a la izquierda -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>