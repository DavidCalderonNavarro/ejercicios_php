<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir a binario, octal o hexadecimal</title>
</head>

<body>

    <?php

    $num = 25423452;
    $base = 16;

    $resultado = [];

    if($base == 2 || $base == 8 || $base == 16){

    if ($num > 0) {

        while ($num >= 1) {

            $resto = $num % $base;
            $num = intdiv($num, $base);

            // Convierto los restos 10-15 a A-F
            if ($resto >= 10) {
                $resultado[] = chr(55 + $resto);
            } else {
                $resultado[] = $resto;
            }
        }

        // Invierto el resultado
        $resultado = array_reverse($resultado);

        // Muestro el resultado
        for ($i = 0; $i < count($resultado); $i++) {
            echo $resultado[$i];
        }
    } else if ($num == 0) {

        echo "0";
    } else {

        echo "Entrada no válida";
    }

    }else{

        echo "La base debe ser 2, 8 o 16";

    }

    ?>

</body>

</html>