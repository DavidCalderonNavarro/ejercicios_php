<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 11</title>
</head>

<body>
    <h1>Funciones swap e invertirArray</h1>

    <?php
    require_once __DIR__ . "/functionsRel3.php";

    $numeros = [10, 20];
    [$numeros[0], $numeros[1]] = swap($numeros[0], $numeros[1]);

    $original = ["rojo", "verde", "azul", "amarillo"];
    $invertido = invertirArray($original);
    ?>

    <p>Después de swap: <?= htmlspecialchars(implode(", ", $numeros), ENT_QUOTES, 'UTF-8') ?></p>
    <p>Array original: <?= htmlspecialchars(implode(", ", $original), ENT_QUOTES, 'UTF-8') ?></p>
    <p>Array invertido: <?= htmlspecialchars(implode(", ", $invertido), ENT_QUOTES, 'UTF-8') ?></p>

</body>

</html>