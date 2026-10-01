<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
<?php 

    $nota1 = 5;
    $nota2 = 6;
    $faltas = 2;

    $medianotas = ($nota1 + $nota2) / 2;
    $notafinal = $medianotas - ($faltas*0.25);

    if($notafinal >= 5){

        echo "El alumno ha aprobado";

    } else {

        echo "El alumno ha suspendido";

    }

?>
    
</body>
</html>