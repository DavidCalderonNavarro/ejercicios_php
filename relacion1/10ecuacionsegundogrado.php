<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuacion de segundo grado</title>
</head>

<body>

    <?php

    // Declaro variables
    $a = 1;
    $b = -5;
    $c = 6;

    // Calculo el discriminante
    $discriminante = ($b * $b) - (4 * $a * $c);

    // Compruebo si "a" es 0.
    if ($a == 0) {

        // Si a = 0, muestro un mensaje indicando que no es una ecuación de segundo grado.
        echo "No es una ecuación de segundo grado.";

        // Si el discriminante es menor que 0, no existe una solucion
    } else if ($discriminante < 0) {

        // Muestro el mensaje que dice que no hay soluciones
        echo "La ecuación no tiene soluciones reales.";

    } else {

        // Calculo la primera solución
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);

        // Calculo la segunda solución
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

        // Muestro el valor de x1.
        echo "x1 = " . $x1 . "<br>";

        // Muestro el valor de x2.
        echo "x2 = " . $x2;
    }

    ?>

</body>

</html>