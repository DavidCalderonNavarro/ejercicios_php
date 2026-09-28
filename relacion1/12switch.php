<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bifurcaciones y switch</title>
</head>

<body>

    <?php

    $nota = 2;

    if ($nota <= 10 && $nota >= 1) {

        switch ($nota) {

            case "10":
            case "9":
                echo "Tienes un sobresaliente";
                break;

            case "8":
            case "7":
                echo "Tienes un notable";
                break;

            case "6":
                echo "Tienes un bien";
                break;

            case "5":
                echo "Tienes un suficiente";
                break;

            case "4":
            case "3":
            case "2":
            case "1":
                echo "Tienes un suspenso";
                break;

            default:
                echo "Introduce tu nota";
                break;
        }
    } else {

        echo "Nota erronea";
    }
    ?>

</body>

</html>