<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuacion de segundo grado</title>
</head>

<body>

    <?php 
 
    // Declaro variables
    $a = 0; 
    $b = -5; 
    $c = 6; 
 
    // Compruebo si "a" es 0
    if ($a == 0) { 
 
        // Compruebo si "b" también es 0
        if ($b == 0) { 
 
            // Si a, b y c son 0, hay infinitas soluciones
            if ($c == 0) { 
                echo "La ecuación tiene infinitas soluciones."; 
            } else { 
                // Si c no es 0, no existe ninguna solución
                echo "La ecuación no tiene solución."; 
            }

        } else { 
 
            // Calculo la solución de la ecuación de primer grado
            $x = -$c / $b; 
 
            echo "Es una ecuación de primer grado.<br>"; 
            echo "x = $x"; 
        }

    } else { 
 
        // Compruebo si b es 0
        if ($b == 0) { 
 
            $resultado = -$c / $a; 
 
            // Si el resultado es negativo, no hay soluciones
            if ($resultado < 0) { 
 
                echo "No existen soluciones"; 
            } else { 
 
                // Calculo las dos soluciones
                $x1 = -sqrt($resultado); 
                $x2 = sqrt($resultado); 
 
                echo "x1 = $x1<br>"; 
                echo "x2 = $x2"; 
            } 
        } elseif ($c == 0) { 
 
            // Si c es 0, una de las soluciones es 0
            $x1 = 0; 
            
            // Calculo la segunda solución
            $x2 = -$b / $a; 
 
            echo "x1 = $x1<br>"; 
            echo "x2 = $x2"; 
        } else { 
 
            // Calculo el discriminante
            $discriminante = pow($b, 2) - 4 * $a * $c; 
 
            // Si el discriminante es negativo, no hay soluciones
            if ($discriminante < 0) { 
 
                echo "No existen soluciones"; 
            } elseif ($discriminante == 0) { 
 
                // Si el discriminante es 0, existe una única solución
                $x = -$b / (2 * $a); 
 
                echo "Existe una única solución<br>"; 
                echo "x = $x"; 
            } else { 
 
                // Calculo la raíz cuadrada del discriminante
                $raiz = sqrt($discriminante); 
 
                // Calculo las dos soluciones
                $x1 = (-$b + $raiz) / (2 * $a); 
                $x2 = (-$b - $raiz) / (2 * $a); 
 
                echo "x1 = $x1<br>"; 
                echo "x2 = $x2"; 
            } 
        } 
    } 
 
?>

</body>

</html>