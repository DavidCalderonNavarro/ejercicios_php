<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">

        <label for="n1">Introduce un número: </label><br>
        <input type="number" name="n1" id="n1"><br><br>
        <label for="n2">Introduce otro número: </label><br>
        <input type="number" name="n2" id="n2"><br><br>
        <button type="submit" name="submit">Calcular</button><br><br>

    </form>


    <?php

    if (isset($_GET["submit"])) {

        $n1 = (int)$_GET["n1"];
        $n2 = (int)$_GET["n2"];
        $resta = 1;

        // FUNCIÓN RECURSIVA PARA CALCULAR EL MCD
        function mcd(int $n1, int $n2): int
        {
            // Caso base: si son iguales, se ha encontrado el MCD
            if ($n1 == $n2) {
                return $n1;
            }

            // Si n1 es mayor, restamos n2
            if ($n1 > $n2) {
                return mcd($n1 - $n2, $n2);
            }

            // Si n2 es mayor, restamos n1
            return mcd($n1, $n2 - $n1);
        }

        // FUNCIÓN RECURSIVA PARA LA DIVISIÓN
        function division(int $dividendo, int $divisor, int $cociente = 0): array
        {
            // Caso base: si el dividendo es menor que el divisor
            if ($dividendo < $divisor) {
                return [
                    "cociente" => $cociente,
                    "resto" => $dividendo
                ];
            }

            // Caso recursivo: restamos el divisor e incrementamos el cociente
            return division($dividendo - $divisor, $divisor, $cociente + 1);
        }


        // COMPROBAMOS SI SE HA ENVIADO EL FORMULARIO

        if ($n1 > 0 && $n2 > 0) {

            // Calculamos el MCD
            echo "El máximo común divisor es: " . mcd($n1, $n2) . "<br>";

            // Calculamos la división de n1 entre n2
            $resultado = division($n1, $n2);

            echo "El cociente es: " . $resultado["cociente"] . "<br>";
            echo "El resto es: " . $resultado["resto"];
        } else {
            echo "Los números tienen que ser mayores que cero.";
        }
    }

    ?>

</body>

</html>