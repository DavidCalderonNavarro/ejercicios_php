<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 12</title>
</head>

<body>
    <h1>Ordenación por burbuja</h1>

    <?php
    function ordenarBurbuja(array &$datos): void
    {
        $n = count($datos);
        for ($i = 0; $i < $n - 1; $i++) {
            $huboCambio = false;
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($datos[$j] > $datos[$j + 1]) {
                    $aux = $datos[$j];
                    $datos[$j] = $datos[$j + 1];
                    $datos[$j + 1] = $aux;
                    $huboCambio = true;
                }
            }
            if (!$huboCambio) break;
        }
    }

    $datos = ['Pérez', 'García', 'López', 'Márquez', 'Álvarez', 'Domínguez', 'Ruíz', 'Díaz'];
    $numeros = [8, 3, 10, 1, 6, 2];
    ordenarBurbuja($datos);
    ordenarBurbuja($numeros);
    ?>

    <p>Nombres ordenados: <?= htmlspecialchars(implode(", ", $datos), ENT_QUOTES, 'UTF-8') ?></p>
    <p>Números ordenados: <?= htmlspecialchars(implode(", ", $numeros), ENT_QUOTES, 'UTF-8') ?></p>

</body>

</html>