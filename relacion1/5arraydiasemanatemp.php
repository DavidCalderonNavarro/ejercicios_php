<?php

const DIAS_SEMANA_TEMP = [
    "Lunes" => "33",
    "Martes" => "29",
    "Miercoles" => "45",
    "Jueves" => "35",
    "Viernes" => "36",
    "Sabado" => "28",
    "Domingo" => "31"
];

//Aqui muestro la temperatura que hacia el lunes:
echo "El lunes hacia ".DIAS_SEMANA_TEMP["Lunes"]. " grados<br>";

//Aqui hago un foreach para recorrer el array e ir mostrando cada dia con su temperatura:
foreach (DIAS_SEMANA_TEMP as $dia => $temperatura) {
    echo "El ". $dia ." hacía ". $temperatura ." grados<br>";
}

echo "<ol>";

//Hago lo mismo que el apartado anterior pero mostrandolo con una lista enumerada
foreach (DIAS_SEMANA_TEMP as $dia => $temperatura) {
    echo "<li>El ". $dia ." hacía ". $temperatura ." grados</li><br>";
}

echo "<table border='2'>";

// Le pongo cabecera a la tabla
echo "<tr>";
echo "<th>Día</th>";
echo "<th>Temperatura</th>";
echo "</tr>";

// Recorro el array y los muestrom uno a uno en formato de tabla
foreach (DIAS_SEMANA_TEMP as $dia => $temperatura) {
   
    echo "<tr>";
    echo "<td>" . $dia . "</td>";
    echo "<td>" . $temperatura . " grados</td>";
    echo "</tr>";
}

echo "</table>";




?>