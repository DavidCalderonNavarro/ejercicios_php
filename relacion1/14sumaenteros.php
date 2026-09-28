<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar enteros y positivos</title>
</head>

<body>

    <?php

    $num = -6;
    $suma = 0;

    if ($num > 0) {

        for ($i = 1; $i <= $num; $i++) {

            $suma = $suma + $i;
        }

        echo "La suma de los " . $num . " primeros numeros es de: " . $suma;
    } else {

        echo "Numero incorrecto";
    }

    ?>

</body>

</html>