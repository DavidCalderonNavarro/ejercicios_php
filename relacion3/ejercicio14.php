<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 14</title>
</head>

<body>
    <h1>Circunferencia, círculo y esfera</h1>

    <?php
    $circunferencia = function ($r) {
        return 2 * pi() * $r;
    };
    $circulo = function ($r) {
        return pi() * $r * $r;
    };
    $esfera = function ($r) {
        return (4 / 3) * pi() * $r * $r * $r;
    };

    $radio = "";
    $resultados = null;
    $error = "";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $radio = trim($_POST["radio"] ?? "");
        if (!is_numeric($radio) || (float)$radio <= 0) {
            $error = "Introduce un radio real positivo.";
        } else {
            $r = (float)$radio;
            $resultados = [
                "Longitud de la circunferencia" => $circunferencia($r),
                "Área del círculo" => $circulo($r),
                "Volumen de la esfera" => $esfera($r)
            ];
        }
    }
    ?>

    <form method="post">
        <label for="radio">Radio (real positivo):</label>
        <input type="number" id="radio" name="radio" min="0.000001" step="any" required value="<?= htmlspecialchars($radio, ENT_QUOTES, 'UTF-8') ?>">
        <button type="submit">Calcular</button>
    </form>

    <?php if ($error): ?><p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
    <?php if ($resultados !== null): ?><h2>Resultados</h2>
        <ul>
            <?php foreach ($resultados as $nombre => $valor): ?>
                <li><?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>: <?= number_format($valor, 4, ',', '.') ?></li>
            <?php endforeach; ?>
        </ul><?php endif; ?>

</body>

</html>