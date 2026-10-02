<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales con switch</title>
</head>

<body>

    <?php

    //Dclaro la variable nota
    $nota = 2;

    //Si nota esta entro 0 y 10 entra al condicional
    if ($nota <= 10 && $nota >= 0) {

        switch ($nota) {

            //Si sale 10 o 9 es un sobresaliente
            case "10":
            case "9":
                echo "Tienes un sobresaliente";
                break;

            //Si es 8 o 7 es un notable
            case "8":
            case "7":
                echo "Tienes un notable";
                break;

            //Si es un 6 es un bien
            case "6":
                echo "Tienes un bien";
                break;

            //Si es un 5 es un suficiente
            case "5":
                echo "Tienes un suficiente";
                break;

            //Si es 4, 3, 2, 1 o 0 es un suspenso
            case "4":
            case "3":
            case "2":
            case "1":
            case "0":
                echo "Tienes un suspenso";
                break;

            default:
                echo "Introduce tu nota";
                break;
        }

    //Si $nota no esta entre 0 y 10 sale error
    } else {

        echo "Nota erronea";
    }
    ?>

</body>

</html>