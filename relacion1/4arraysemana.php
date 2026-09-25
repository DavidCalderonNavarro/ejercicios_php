<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArrayConstante</title>
</head>

<body>

    <?php

    //Declaro el array constante con valores
    const DIAS_SEMANA = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

    //Muestro el primer dia de la semana con printf
    echo "<hr><h2>Primer dia de la semana:</h2>";
    printf("Hoy es %s ", DIAS_SEMANA[0]);

    //Muestro todos los dias de la semana con un for
    echo "<hr><h2>Dias de la semana:</h2>";
    for ($i = 0; $i <= 6; $i++) {

        echo "Día ". $i ." : ". DIAS_SEMANA[$i]. "<br>";

    }

    //Muestro los dias de la semana en forma de lista numerada
    echo "<hr><h2>Dias de la semana en lista ordenada:</h2>";
    echo "<ol>";

    for ($i = 0; $i <= 6; $i++) {

        echo "<li>". DIAS_SEMANA[$i]. "<br></li>";

    }

    echo "</ol>";

    //La longitud de un array se mide con count()

    echo "<hr><p>Los dias de la semana son ". count(DIAS_SEMANA) ."</p>";

    ?>

</body>

</html>