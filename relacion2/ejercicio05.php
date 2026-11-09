<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <?php

    const DIAS_SEMANA_TEMP = [
        "Lunes" => 33,
        "Martes" => 29,
        "Miercoles" => 45,
        "Jueves" => 35,
        "Viernes" => 36,
        "Sabado" => 28,
        "Domingo" => 31
    ];

    //Aqui muestro la temperatura que hacia el lunes:
    echo "El lunes hacia " . DIAS_SEMANA_TEMP["Lunes"] . " grados<br>";

    //Aqui hago un foreach para recorrer el array e ir mostrando cada dia con su temperatura:
    foreach (DIAS_SEMANA_TEMP as $dia => $temperatura) {
        echo "El " . $dia . " hacía " . $temperatura . " grados<br>";
    }

    echo "<ol>";

    //Hago lo mismo que el apartado anterior pero mostrandolo con una lista enumerada
    foreach (DIAS_SEMANA_TEMP as $dia => $temperatura) {
        echo "<li>El " . $dia . " hacía " . $temperatura . " grados</li><br>";
    }

    echo "<table class='table table-striped-columns table-hover table-bordered' data-bs-theme='dark'>";

    // Le pongo cabecera a la tabla
    echo "<thead class='table-primary'>";
    echo "<tr>";
    echo "<th scope='col'>#</th>";
    echo "<th scope='col'>Día</th>";
    echo "<th scope='col'>Temperatura</th>";
    echo "</tr>";
    echo "</thead>";

    $contador = 0;

    // Recorro el array y los muestro uno a uno en formato de tabla
    foreach (DIAS_SEMANA_TEMP as $dia => $temperatura) {

        $contador += 1;

        echo "<tr>";
        echo "<th scope='row'>" . $contador . "</th>";
        echo "<td>" . $dia . "</td>";
        echo "<td>" . $temperatura . " grados</td>";
        echo "</tr>";
    }

    echo "</table>";

    ?>

    <button class="alert alert-danger" role="alert">Alerta!!!</button>
    <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden">Loading…</span>
    </div>
    <div class="d-inline-block position-relative">
        <img src="https://github.com/DavidCalderonNavarro.png"
            alt="David Calderón"
            class="rounded-circle border"
            width="60"
            height="60">

        <span class="position-absolute bottom-0 end-0 
                 bg-success border border-white rounded-circle"
            style="width: 15px; height: 15px;">
        </span>
    </div>

</body>

</html>