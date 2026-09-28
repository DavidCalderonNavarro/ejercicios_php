<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir a binario</title>
</head>

<body>

    <?php

    $num = 45;
    $binario = [];

    if ($num > 0) {

        while ($num >= 1) {

            $resto = $num % 2;
            $num = intdiv($num, 2);

            array_push($binario, $resto);
        }

        $invertido = array_reverse($binario);

        for ($i = 0; $i < count($invertido); $i++) {

            echo $invertido[$i];
        }
    } else if ($num == 0) {

        echo "0";

    }else{

        echo "Entrada no valida";

    }

    ?>

</body>

</html>