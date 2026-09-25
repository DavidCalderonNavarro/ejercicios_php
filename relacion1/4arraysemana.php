<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArrayConstante</title>
</head>

<body>

    <?php

    const DIAS_SEMANA = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];


    echo DIAS_SEMANA[0] . "<br>";

    foreach (DIAS_SEMANA as $DIA_SEMANA) {

        echo $DIA_SEMANA . "<br>";
    }

    echo "<ol>";

    foreach (DIAS_SEMANA as $DIA_SEMANA) {

        echo "<li>" . $DIA_SEMANA . "</li><br>";
    }

    echo "</ol>";

    ?>

</body>

</html>