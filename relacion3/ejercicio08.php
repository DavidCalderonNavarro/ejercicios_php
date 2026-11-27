<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 8</title>
</head>

<body>
    <h1>Convertir texto (una sola opción)</h1>

    <?php
    $texto = "";
    $opcion = "";
    $error = "";
    $resultado = null;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $texto = trim($_POST["texto"] ?? "");
        $opcion = $_POST["opcion"] ?? "";
        if (!in_array($opcion, ["mayusculas", "minusculas"], true)) {
            $error = "Elige una opción.";
        } else {
            $resultado = $opcion === "mayusculas"
                ? mb_strtoupper($texto, "UTF-8")
                : mb_strtolower($texto, "UTF-8");
        }
    }
    ?>

    <form method="post" onsubmit="return validarOpcion()">
        <label for="texto">Texto:</label>
        <input id="texto" name="texto" type="text" required value="<?= htmlspecialchars($texto, ENT_QUOTES, 'UTF-8') ?>">
        <p><label><input type="radio" name="opcion" value="mayusculas" <?= $opcion === "mayusculas" ? "checked" : "" ?>> Mayúsculas</label></p>
        <p><label><input type="radio" name="opcion" value="minusculas" <?= $opcion === "minusculas" ? "checked" : "" ?>> Minúsculas</label></p>
        <button type="submit">Convertir</button>
    </form>

    <p id="aviso" role="alert"></p>

    <script>
        function validarOpcion() {
            const elegido = document.querySelector('input[name="opcion"]:checked');
            document.getElementById("aviso").textContent = elegido ? "" : "Elige una opción.";
            return Boolean(elegido);
        }
    </script>

    <?php if ($error): ?><p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
    <?php if ($resultado !== null): ?><h2>Resultado</h2>
        <p><?= htmlspecialchars($resultado, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>

</body>

</html>