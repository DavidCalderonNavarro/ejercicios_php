<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular factorial</title>
</head>

<body>

    <?php

    // Declaro las variables
    $num = 23;
    $suma = 1;

    // Compruebo si el número está entre 1 y 10
    if ($num > 0 && $num <= 10) {

        // Recorro los números desde 1 hasta el número indicado
        for ($i = 1; $i <= $num; $i++) {

            // Multiplico el número por el valor actual de i
            $multi = $num * $i;

            // Muestro la multiplicación realizada
            echo "(" . $num . "x" . $i . ") = " . $multi . "<br>";

            // Multiplico el resultado anterior por i para calcular el factorial
            $suma = $suma * $i;
        }

        // Muestro el resultado final del factorial
        echo "Factorial del numero " . $num . " = " . $suma;
    } else {

        // Muestro un mensaje si el número no está entre 1 y 10
        echo "Numero incorrecto";
    }

    ?>

</body>

</html>