<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular numero primo</title>
</head>

<body>

    <?php

    $num = 29;
    $primo = true;

    if($num >= 2){

    for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {

            $primo = false;

        }
    }

    if ($primo == true) {

        echo "Tu numero es primo";
    } else {

        echo "Tu numero no es primo";
    }

    }else{

        echo "Tu numero no puede ser menor a 2";

    }

    ?>

</body>

</html>