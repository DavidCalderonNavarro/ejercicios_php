<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-4">
    <h1>Funciones de cadenas</h1>

    <form method="post" class="mb-4">
        <label for="texto" class="form-label">Introduce una cadena:</label>
        <textarea class="form-control" id="texto" name="texto" rows="3" required><?= htmlspecialchars($texto, ENT_QUOTES, 'UTF-8') ?></textarea>
        <button class="btn btn-primary mt-3" type="submit">Procesar</button>
    </form>

    <?php
    $texto = "";
    $datos = null;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $texto = $_POST["texto"] ?? "";
        $sinEspaciosExtremos = trim($texto);
        $palabras = preg_split('/\s+/u', $sinEspaciosExtremos, -1, PREG_SPLIT_NO_EMPTY);
        $invertida = implode("", array_reverse(preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY)));
        $normalizada = mb_strtolower(preg_replace('/[^\p{L}\p{N}]/u', '', $texto), "UTF-8");
        $esPalindroma = $normalizada !== "" && $normalizada === implode("", array_reverse(preg_split('//u', $normalizada, -1, PREG_SPLIT_NO_EMPTY)));
        $datos = [
            "Cadena al revés" => $invertida . " — " . ($esPalindroma ? "Es palíndroma" : "No es palíndroma"),
            "Palabras en orden inverso" => implode(" ", array_reverse($palabras)),
            "Mayúsculas" => mb_strtoupper($texto, "UTF-8"),
            "Minúsculas" => mb_strtolower($texto, "UTF-8"),
            "Recuento" => "Caracteres (incluidos espacios): " . mb_strlen($texto, "UTF-8") . "; palabras: " . count($palabras),
            "crypt" => crypt($texto, "php"),
            "md5" => md5($texto),
            "sha1" => sha1($texto)
        ];
    }
    ?>

    <?php if ($datos !== null): ?>
        <?php foreach ($datos as $titulo => $valor): ?>
            <div class="alert alert-info" role="alert">
                <strong><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?>:</strong>
                <?= htmlspecialchars($valor, ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</body>

</html>