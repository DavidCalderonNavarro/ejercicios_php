<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 9</title>
</head>

<body>
    <h1>Encontrar la palabra más larga</h1>

    <form method="post">
        <label for="texto">Introduce un texto:</label><br>
        <textarea id="texto" name="texto" required rows="4" cols="50"><?= htmlspecialchars($texto, ENT_QUOTES, 'UTF-8') ?></textarea><br>
        <button type="submit">Buscar</button>
    </form>

    <?php
    $texto = "";
    $palabraLarga = null;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $texto = trim($_POST["texto"] ?? "");
        if ($texto !== "") {
            $palabras = preg_split('/\s+/u', $texto, -1, PREG_SPLIT_NO_EMPTY);
            $palabraLarga = "";
            foreach ($palabras as $palabra) {
                if (mb_strlen($palabra, "UTF-8") > mb_strlen($palabraLarga, "UTF-8")) {
                    $palabraLarga = $palabra;
                }
            }
        }
    }
    ?>

    <?php if ($palabraLarga !== null): ?>
        <p>La palabra más larga es: <strong><?= htmlspecialchars($palabraLarga, ENT_QUOTES, 'UTF-8') ?></strong></p>
    <?php elseif ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
        <p>El texto no contiene palabras.</p>
    <?php endif; ?>

</body>

</html>