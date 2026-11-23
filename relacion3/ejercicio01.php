<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">

        <label for="n1">1): Dime un número(Es primo o no):</label><br>
        <input type="number" name="n1" id="n1"><br><br>
        <label for="n2">2): Dime un número(¿Cuantos primos hay de 1 a tu número?):</label><br>
        <input type="number" name="n2" id="n2"><br><br>
        <button type="submit" name="submit">Calcular</button><br><br>

    </form>

    <?php

    if (isset($_GET["submit"])) {

        $n1 = (int)$_GET["n1"];

        //1) Funcion para saber si es primo o no

        function esPrimo(int $n1): bool
        {

            $dividido = 0;
            $resultado = false;

            //Recorro desde 1 hasta el numero para saber cuantos divisores tiene

            for ($i = 1; $i <= $n1; $i++) {

                //Si tiene un divisor se suma a la variable

                if ($n1 % $i == 0) {

                    $dividido++;
                }

                //Si tiene mas de 2 divisores no es primo

                if ($dividido > 2) {

                    return false;
                }
            }

            //Si tiene 2 divisores si es primo

            if ($dividido == 2) {

                $resultado = true;
            }

            return $resultado;
        }

        if (esPrimo($n1)) {

            //Resultado para primo

            echo "1): El $n1 es primo<br>";
        } else {

            //Resultado para no primo

            echo "1): El $n1 no es primo<br>";
        }

        //2) Calculo de cuantos primos hay entre medias

        $n2 = (int)$_GET["n2"];
        $array = [];
        $contador = 0;

        for ($i = 1; $i <= $n2; $i++) {

            if(esPrimo($i)){

                $array[$contador] = $i;
                $contador++;

            }

        }

        echo "2) Numeros primos desde 1 hasta $n2:<br>";

        for($i = 0; $i < count($array); $i++){

            echo "$array[$i], ";

        }

    }

    ?>

</body>

</html>