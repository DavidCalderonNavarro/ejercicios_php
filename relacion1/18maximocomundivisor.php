<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximo comun divisor</title>
</head>

<body>

    <?php

    $num1 = 20;
    $num2 = 12;
    $resta = 1;

    while ($num1 != $num2) {

        if ($num1 < $num2) {

            $resta = $num2 - $num1;
            $num2 = $resta;
        } else {

            $resta = $num1 - $num2;
            $num1 = $resta;
        }
    }

    echo "El maximo comun divisor es: " . $resta;

    ?>

</body>

</html>