<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir a binario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 500px;">
            <h1 class="text-center mb-4">Convertir a binario</h1>

            <form method="POST">
                <div class="mb-3">
                    <label for="numero" class="form-label">Introduce un número entero:</label>
                    <input
                        type="number"
                        class="form-control"
                        id="numero"
                        name="numero"
                        min="0"
                        step="1"
                        required>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Convertir
                </button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $num = $_POST["numero"] ?? "";

                if (filter_var($num, FILTER_VALIDATE_INT) === false || $num < 0) {

                    echo '<div class="alert alert-danger mt-3">Introduce un número entero válido, mayor o igual que 0.</div>';
                } else {

                    $num = (int) $num;
                    $binario = [];

                    if ($num > 0) {

                        while ($num >= 1) {
                            $resto = $num % 2;
                            $num = intdiv($num, 2);

                            array_push($binario, $resto);
                        }

                        $invertido = array_reverse($binario);

                        echo '<div class="alert alert-success mt-3">';
                        echo '<strong>Resultado:</strong> ';

                        for ($i = 0; $i < count($invertido); $i++) {
                            echo $invertido[$i];
                        }

                        echo '</div>';
                    } else {

                        echo '<div class="alert alert-success mt-3">';
                        echo '<strong>Resultado:</strong> 0';
                        echo '</div>';
                    }
                }
            }
            ?>
        </div>
    </div>

</body>

</html>