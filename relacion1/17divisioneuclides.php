<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular division euclides</title>
</head>

<body>

    <?php

    $divisor = 50;
    $dividendo = 40205;
    $coeficiente = 0;

    while ($dividendo >= $divisor) {

        $dividendo = $dividendo - $divisor;
        $coeficiente++;
    }

    echo "El coeficiente es: " . $coeficiente . "<br>";
    echo "El resto es: " . $dividendo;

    ?>

</body>

</html>