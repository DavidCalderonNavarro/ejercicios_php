<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Como se monta un grid para distribuir el espacio -->
    <!-- 1º un div de la class container -->
    <div id="main" class="container" class="bg-secondary-subtle">
        <h2 class="text-primary text-center">Calculadora básica</h2>
        <!-- 2º un div de class row -->
        <div class="row">
            <!-- 3º varios div para columnas, indicando reparto de las 12 areas de columnas-->
            <div class="col-md-3 col-sm-1 clo-0">
                <!-- Aqui va un espacio en blanco a la izquierda -->
            </div>
            <div class="col-md-6 col-sm-10 clo-12">
                <!-- Aqui va el formulario -->
                <form class="m5-5 border rounded p-3 shadow" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="n1" class="form-label fw-bold">Numero 1: </label>
                        <input type="number" name="n1" class="form-control" id="n1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <select name="op" class="form-select" aria-label="Default select example">
                            <option selected value="0">Elige operador</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="n2" class="form-label fw-bold">Numero 2: </label>
                        <input type="number" name="n2" class="form-control" id="n2">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary ">Calcular</button>
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

                    echo "<h4 class = 'text-center text-primary mt-2'>El reultado es: $resultado</h4>";
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