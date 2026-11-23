<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales con switch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <h2 class="text-center mb-4">Calificaciones del alumno</h2>

        <div class="card p-4 shadow">

            <form method="POST" action="" class="needs-validation">

                <div class="mb-3">
                    <label class="form-label">Dime tu nota</label>
                    <input type="number" name="nota"
                        class="form-control">
                </div>
                <button type="submit" name="enviar"
                    class="btn btn-primary w-100">
                    Calcular calificación
                </button>

            </form>

            <?php

            //Declaro la variable nota

            $nota = $_POST["nota"];

            //Si nota esta entro 0 y 10 entra al condicional
            if ($nota <= 10 && $nota >= 0) {

                switch ($nota) {

                    //Si sale 10 o 9 es un sobresaliente
                    case "10":
                    case "9":
                        echo "Tienes un sobresaliente";
                        break;

                    //Si es 8 o 7 es un notable
                    case "8":
                    case "7":
                        echo "Tienes un notable";
                        break;

                    //Si es un 6 es un bien
                    case "6":
                        echo "Tienes un bien";
                        break;

                    //Si es un 5 es un suficiente
                    case "5":
                        echo "Tienes un suficiente";
                        break;

                    //Si es 4, 3, 2, 1 o 0 es un suspenso
                    case "4":
                    case "3":
                    case "2":
                    case "1":
                    case "0":
                        echo "Tienes un suspenso";
                        break;

                    default:
                        echo "Introduce tu nota";
                        break;
                }

                //Si $nota no esta entre 0 y 10 sale error
            } else {

                echo "Nota erronea";
            }

                echo "<br>La nota es un $nota";
                echo "<progress id='file' max='100' value='",($nota*10),"'>$nota</progress>";

            ?>



</body>

</html>