<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">

        <label for="num">Dime un número para saber su factorial(1-10):</label><br>
        <input type="number" name="num" id="num"><br><br>
        <button type="submit" name="submit">Calcular</button><br><br>

    </form>

    <?php

    if (isset($_GET["submit"])) {

        $num = (int)$_GET["num"];

        function factorial(int $num)
        {

            // Declaro las variables


            $suma = 1;

            // Compruebo si el número está entre 1 y 10
            if ($num > 0 && $num <= 10) {

                // Recorro los números desde 1 hasta el número indicado
                for ($i = 1; $i <= $num; $i++) {

                    // Multiplico el resultado anterior por i para calcular el factorial
                    $suma *= $i;
                }
            } else {

                $suma = 0;
            }

            return $suma;
        }

        if (factorial($num) >= 1) {

            // Muestro el resultado final del factorial
            echo "Factorial del número " . $num . " = " . factorial($num);
        } else {

            echo "El numero es incorrecto";
        }

        function factorialRecursivo(int $num)
        {

            // Compruebo si el número está entre 1 y 10
            if ($num < 1 || $num > 10) {
                return "Numero incorrecto";
            }

            // Caso base
            if ($num == 1) {
                return 1;
            }

            // Caso recursivo
            return $num * factorialRecursivo($num - 1);
        }

        echo "<br>  Factorial de número" . $num . " = " . factorialRecursivo($num) . "<br>";
    }

    ?>

</body>

</html>