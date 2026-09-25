<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArraysAsociativosNotas</title>
</head>
<body>

    <?php 
    
    //Declaro los dos arrays asociativos
    $rubrica = [
            "inicial" => 0,
            "primera" => 0,
            "segunda" => 0,
            "tercera" => 0
            ];
    
    $notasalumno = [
            "inicial" => 6,
            "primera" => 8,
            "segunda" => 4,
            "tercera" => 5
            ];

    //Vuelco el valor de la nota de notasalumno a rubrica
    foreach($rubrica as $tipo => $nota){

        $rubrica[$tipo] = $notasalumno[$tipo];

    }
    
    //Muestro el tipo de nota y su valor
    foreach($rubrica as $tipo => $nota){

        echo "En la nota ". $tipo ." saco un ". $nota ."<br>";

    }

    ?>
    
</body>
</html>