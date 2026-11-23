<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir a binario, octal o hexadecimal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 500px;">
            <h1 class="text-center mb-4">Conversor de bases</h1>

            <form method="POST">
                <div class="mb-3">
                    <label for="numero" class="form-label">Número entero:</label>
                    <input type="number" class="form-control" id="numero" name="numero" min="0" step="1" required>
                </div>

                <div class="mb-3">
                    <label for="base" class="form-label">Convertir a:</label>
                    <select class="form-select" id="base" name="base">
                        <option value="2" selected>Binario (base 2)</option>
                        <option value="8">Octal (base 8)</option>
                        <option value="16">Hexadecimal (base 16)</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Convertir
                </button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $num = $_POST["numero"] ?? "";
                $base = $_POST["base"] ?? "2";

                if (filter_var($num, FILTER_VALIDATE_INT) === false || $num < 0) {

                    echo '<div class="alert alert-danger mt-3">Introduce un número entero válido, mayor o igual que 0.</div>';
                } else {

                    $num = (int) $num;

                    $nombreBase = match ($base) {
                        "2" => "Binario",
                        "8" => "Octal",
                        "16" => "Hexadecimal",
                        default => "Binario"
                    };

                    $resultado = [];

                    if ($num > 0) {

                        while ($num >= 1) {
                            $resto = $num % (int) $base;
                            $num = intdiv($num, (int) $base);

                            // Convertir los restos 10-15 a A-F
                            if ($resto >= 10) {
                                $resultado[] = chr(55 + $resto);
                            } else {
                                $resultado[] = $resto;
                            }
                        }

                        $resultado = array_reverse($resultado);
                        $conversion = implode("", $resultado);
                    } else {
                        $conversion = "0";
                    }

                    echo '<div class="alert alert-success mt-3">';
                    echo '<strong>' . $nombreBase . ':</strong> ' . $conversion;
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>

</body>

</html>