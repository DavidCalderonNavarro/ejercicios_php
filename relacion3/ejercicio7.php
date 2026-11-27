<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 7</title>
</head>

<body>
    <h1>Funciones de fecha y hora</h1>
    <?php
    date_default_timezone_set("Europe/Madrid");

    function nombreDiaEspanol(int $numeroDia): string
    {
        $dias = ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"];
        return $dias[$numeroDia] ?? "";
    }

    function nombreMesEspanol(int $numeroMes): string
    {
        $meses = [
            "enero",
            "febrero",
            "marzo",
            "abril",
            "mayo",
            "junio",
            "julio",
            "agosto",
            "septiembre",
            "octubre",
            "noviembre",
            "diciembre"
        ];
        return $meses[$numeroMes - 1] ?? "";
    }

    $ahora = new DateTime();
    $fechaFutura = (clone $ahora)->modify("+10 days");
    $fechaPasada = (clone $ahora)->modify("-1 month");
    $intervalo = $ahora->diff($fechaFutura);
    ?>
    <ul>
        <li>Fecha actual: <?= $ahora->format("d/m/Y") ?></li>
        <li>Hora actual: <?= $ahora->format("H:i:s") ?></li>
        <li>Día de la semana: <?= ucfirst(nombreDiaEspanol((int)$ahora->format("w"))) ?></li>
        <li>Mes: <?= ucfirst(nombreMesEspanol((int)$ahora->format("n"))) ?></li>
        <li>Fecha y hora con formato: <?= $ahora->format("l, d F Y - H:i") ?></li>
        <li>Dentro de 10 días: <?= $fechaFutura->format("d/m/Y") ?></li>
        <li>Hace un mes: <?= $fechaPasada->format("d/m/Y") ?></li>
        <li>Diferencia entre hoy y dentro de 10 días: <?= $intervalo->days ?> días</li>
        <li>Timestamp actual: <?= $ahora->getTimestamp() ?></li>
    </ul>
</body>

</html>