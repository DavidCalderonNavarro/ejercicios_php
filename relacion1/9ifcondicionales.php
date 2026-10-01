<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de condicionales</title>
</head>

<body>

    <?php

    //Declaro las variables de los lados
    $lado1 = 8;
    $lado2 = 3;
    $lado3 = 4;

    //Primer if para saber si es equilatero
    if ($lado1 == $lado2 && $lado1 == $lado3) {

        echo "Tu triangulo es equilátero";
    
    //Utilizo un else if para poner otra condicion
    } else if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {

        echo "Tu triangulo es isósceles";

    /*En el ultimo no hace falta poner if porque si no a sido 
    equilatero o isosceles pues sera escaleno
    */
    } else {

        echo "Tu triangulo es escaleno";
    }

    ?>

</body>

</html>