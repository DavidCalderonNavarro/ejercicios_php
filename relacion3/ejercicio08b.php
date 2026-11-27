<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 8b</title>
</head>

<body>
    <h1>Convertir texto</h1>

    <?php
    $texto = "";
    $resultado = null;
    $error = "";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $texto = trim($_POST["texto"] ?? "");
        $mayusculas = isset($_POST["mayusculas"]);
        $minusculas = isset($_POST["minusculas"]);
        if (!$mayusculas && !$minusculas) {
            $error = "Selecciona al menos una opción.";
        } else {
            $resultado = [];
            if ($mayusculas) $resultado[] = ["Mayúsculas", mb_strtoupper($texto, "UTF-8")];
            if ($minusculas) $resultado[] = ["Minúsculas", mb_strtolower($texto, "UTF-8")];
        }
    }
    ?>

    <form method="post" onsubmit="return validarOpciones()">
        <label for="texto">Texto:</label>
        <input id="texto" name="texto" type="text" required value="<?= htmlspecialchars($texto, ENT_QUOTES, 'UTF-8') ?>">
        <p><label><input type="checkbox" name="mayusculas" id="mayusculas" <?= isset($_POST["mayusculas"]) ? "checked" : "" ?>> Mayúsculas</label></p>
        <p><label><input type="checkbox" name="minusculas" id="minusculas" <?= isset($_POST["minusculas"]) ? "checked" : "" ?>> Minúsculas</label></p>
        <button type="submit">Convertir</button>
    </form>

    <p id="aviso" role="alert"></p>

    <script>
        function validarOpciones() {
            const valido = document.getElementById("mayusculas").checked ||
                document.getElementById("minusculas").checked;
            document.getElementById("aviso").textContent = valido ? "" : "Selecciona al menos una opción.";
            return valido;
        }
    </script>

    <?php if ($error): ?><p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
    <?php if ($resultado !== null): ?><h2>Resultado</h2>
        <?php foreach ($resultado as [$etiqueta, $valor]): ?>
            <p><strong><?= $etiqueta ?>:</strong> <?= htmlspecialchars($valor, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endforeach;
    endif; ?>

</body>

</html>