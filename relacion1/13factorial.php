<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular factorial</title>
</head>
<body>

    <?php 
    
        $num = 8;
        $suma = 1;
    
        for($i = 1; $i <= $num; $i++){

            $multi = $num*$i;
            echo "(". $num ."x". $i .") = ". $multi ."<br>";

            $suma = $suma * $i;

        }

        echo "Factorial del numero ". $num ." = ". $suma;
    
    
    ?>
    
</body>
</html>