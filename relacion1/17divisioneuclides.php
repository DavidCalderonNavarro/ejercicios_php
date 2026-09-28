<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular division euclides</title>
</head>

<body>

    <?php

    $divisor = 7;
    $dividendo = 14;
    $cociente = 0;

    if($divisor > 0 && $dividendo > 0){

    while ($dividendo >= $divisor) {

        $dividendo = $dividendo - $divisor;
        $cociente++;
    }

    echo "El cociente es: " . $cociente . "<br>";
    echo "El resto es: " . $dividendo;

    }else{

        echo "Los numeros tienen que ser positivos y enteros";

    }

    ?>

</body>

</html>