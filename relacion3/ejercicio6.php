<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 6</title>
</head>

<body>
    <h1>Simulación de dados</h1>
    <form method="post">
        <label for="tiradas">Número de tiradas:</label>
        <input type="number" id="tiradas" name="tiradas" min="1" max="1000000"
            value="<?= htmlspecialchars((string)($tiradas ?? ""), ENT_QUOTES, 'UTF-8') ?>" required>
        <button type="submit">Simular</button>
    </form>
    <?php
    $resultadosCorrecto = array_fill(1, 6, 0);
    $resultadosTrucado = array_fill(1, 6, 0);
    $tiradas = null;
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $tiradas = filter_input(INPUT_POST, "tiradas", FILTER_VALIDATE_INT);
        if ($tiradas === false || $tiradas === null || $tiradas < 1 || $tiradas > 1000000) {
            $error = "Introduce un número entero entre 1 y 1.000.000.";
            $tiradas = null;
        } else {
            for ($i = 0; $i < $tiradas; $i++) {
                // Dado equiprobable: los seis resultados tienen la misma probabilidad.
                $resultado = random_int(1, 6);
                $resultadosCorrecto[$resultado]++;

                // Dado trucado: seis caras con pesos 1,1,1,1,1,3 (total 8).
                $valor = random_int(1, 8);
                $resultadoTrucado = ($valor >= 6) ? 6 : $valor;
                $resultadosTrucado[$resultadoTrucado]++;
            }
        }
    }
    ?>
    <?php if ($error !== ""): ?><p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
    <?php if ($tiradas !== null): ?>
        <h2>Frecuencias en <?= number_format($tiradas, 0, ',', '.') ?> tiradas</h2>
        <table border="1" cellpadding="6">
            <thead>
                <tr>
                    <th>Resultado</th>
                    <th>Dado correcto</th>
                    <th>Dado trucado</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($cara = 1; $cara <= 6; $cara++): ?>
                    <tr>
                        <td><?= $cara ?></td>
                        <td><?= $resultadosCorrecto[$cara] ?></td>
                        <td><?= $resultadosTrucado[$cara] ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>

</html>