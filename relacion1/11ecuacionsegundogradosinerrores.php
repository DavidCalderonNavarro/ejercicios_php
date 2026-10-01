<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuacion de segundo grado sin errores</title>
</head>

<body>

    <?php

    $a = 0;
    $b = -5;
    $c = 6;

    if ($a == 0) {

        if ($b == 0) {

            if ($c == 0) {
                echo "La ecuación tiene infinitas soluciones.";
            } else {
                echo "La ecuación no tiene solución.";
            }
        } else {

            $x = -$c / $b;

            echo "Es una ecuación de primer grado.<br>";
            echo "x = $x";
        }
    } else {

        if ($b == 0) {

            $resultado = -$c / $a;

            if ($resultado < 0) {

                echo "No existen soluciones reales.";
            } else {

                $x1 = -sqrt($resultado);
                $x2 = sqrt($resultado);

                echo "x1 = $x1<br>";
                echo "x2 = $x2";
            }
        } elseif ($c == 0) {

            $x1 = 0;
            $x2 = -$b / $a;

            echo "x1 = $x1<br>";
            echo "x2 = $x2";
        } else {

            $discriminante = pow($b, 2) - 4 * $a * $c;

            if ($discriminante < 0) {

                echo "No existen soluciones reales.";
            } elseif ($discriminante == 0) {

                $x = -$b / (2 * $a);

                echo "Existe una única solución real.<br>";
                echo "x = $x";
            } else {

                $raiz = sqrt($discriminante);

                $x1 = (-$b + $raiz) / (2 * $a);
                $x2 = (-$b - $raiz) / (2 * $a);

                echo "x1 = $x1<br>";
                echo "x2 = $x2";
            }
        }
    }

    ?>

</body>

</html>