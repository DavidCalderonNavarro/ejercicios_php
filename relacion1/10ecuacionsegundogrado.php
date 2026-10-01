<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuacion de segundo grado</title>
</head>

<body>

    <?php

    $a = 1;
    $b = -5;
    $c = 6;

    $discriminante = ($b * $b) - (4 * $a * $c);

    if ($a == 0) {

        echo "No es una ecuación de segundo grado.";

    } else if ($discriminante < 0) {

        echo "La ecuación no tiene soluciones reales.";

    } else {

        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

        echo "x1 = " . $x1 . "<br>";
        echo "x2 = " . $x2;

    }

    ?>


</body>

</html>