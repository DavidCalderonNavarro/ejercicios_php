<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 10</title>
</head>

<body>
    <h1>Invertir orden de las palabras</h1>

    <form method="post">
        <label for="texto">Introduce un texto:</label><br>
        <textarea id="texto" name="texto" rows="4" cols="50" required><?= htmlspecialchars($texto, ENT_QUOTES, 'UTF-8') ?></textarea><br>
        <button type="submit">Invertir</button>
    </form>

    <?php
    $texto = "";
    $invertido = null;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $texto = trim($_POST["texto"] ?? "");
        $palabras = preg_split('/\s+/u', $texto, -1, PREG_SPLIT_NO_EMPTY);
        $invertido = implode(" ", array_reverse($palabras));
    }
    ?>
    <?php if ($invertido !== null): ?><p>Texto invertido: <?= htmlspecialchars($invertido, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>

</body>

</html>