
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays asociativos notas</title>

</head>

<body>

    <h1>Calificación del alumno</h1>

    <form id="formulario" action="" method="POST" novalidate>

        <label for="nombre">Nombre del alumno:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="correo">Correo electrónico:</label>
        <input type="text" id="correo" name="correo">

        <label for="inicial">Nota inicial:</label>
        <input type="text" id="inicial" name="inicial">

        <label for="primera">Primera nota:</label>
        <input type="text" id="primera" name="primera">

        <label for="segunda">Segunda nota:</label>
        <input type="text" id="segunda" name="segunda">

        <label for="tercera">Tercera nota:</label>
        <input type="text" id="tercera" name="tercera">

        <button type="submit">Calcular calificación</button>

    </form>

    <p id="mensaje"></p>

    <?php

    if (isset($_POST["nombre"])) {

        // Recojo los datos del formulario
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];

        // Declaro los dos arrays asociativos
        $rubrica = [
            "inicial" => 0,
            "primera" => 0,
            "segunda" => 0,
            "tercera" => 0
        ];

        $notasalumno = [
            "inicial" => $_POST["inicial"],
            "primera" => $_POST["primera"],
            "segunda" => $_POST["segunda"],
            "tercera" => $_POST["tercera"]
        ];

        // Vuelco las notas de notasalumno a rubrica
        foreach ($rubrica as $tipo => $nota) {

            $rubrica[$tipo] = $notasalumno[$tipo];

        }

        // Muestro los datos del alumno
        echo "<div class='resultado'>";

        echo "<h2>Datos del alumno</h2>";

        echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
        echo "<p>Correo: " . htmlspecialchars($correo) . "</p>";

        // Muestro el tipo de nota y su valor
        foreach ($rubrica as $tipo => $nota) {

            echo "En la nota " . $tipo . " saco un "
                . htmlspecialchars($nota) . "<br>";

        }

        echo "</div>";

    }

    ?>

    <script>

        // Obtengo el formulario
        const formulario = document.getElementById("formulario");

        // Obtengo el mensaje de error
        const mensaje = document.getElementById("mensaje");

        // Función para comprobar si un campo está vacío
        function comprobarVacio(campo) {

            return campo.value.trim() === "";

        }

        // Función para comprobar el correo
        function comprobarCorreo(correo) {

            const expresion = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            return expresion.test(correo.value.trim());

        }

        // Función para comprobar si una nota es válida
        function comprobarNota(campo) {

            const valor = campo.value.trim();

            // Compruebo que no esté vacío
            if (valor === "") {
                return false;
            }

            // Compruebo que sea un número
            const nota = Number(valor);

            if (typeof nota !== "number" || !Number.isFinite(nota)) {
                return false;
            }

            // Compruebo que esté entre 0 y 10
            if (nota < 0 || nota > 10) {
                return false;
            }

            return true;

        }

        // Evento para validar el formulario
        formulario.addEventListener("submit", function (evento) {

            // Evito el envío inicial del formulario
            evento.preventDefault();

            let errores = [];

            // Obtengo los campos
            const nombre = document.getElementById("nombre");
            const correo = document.getElementById("correo");

            const inicial = document.getElementById("inicial");
            const primera = document.getElementById("primera");
            const segunda = document.getElementById("segunda");
            const tercera = document.getElementById("tercera");

            // Guardo todos los campos en un array
            const campos = [
                nombre,
                correo,
                inicial,
                primera,
                segunda,
                tercera
            ];

            // Quito los estilos anteriores
            campos.forEach(function (campo) {

                campo.classList.remove("error");
                campo.classList.remove("correcto");

            });

            // Compruebo el nombre
            if (comprobarVacio(nombre)) {

                errores.push("El nombre no puede estar vacío.");
                nombre.classList.add("error");

            } else {

                nombre.classList.add("correcto");

            }

            // Compruebo el correo
            if (comprobarVacio(correo)) {

                errores.push("El correo no puede estar vacío.");
                correo.classList.add("error");

            } else if (!comprobarCorreo(correo)) {

                errores.push("El correo no tiene un formato válido.");
                correo.classList.add("error");

            } else {

                correo.classList.add("correcto");

            }

            // Guardo las notas en un array
            const notas = [inicial, primera, segunda, tercera];

            // Batería de tests para las notas
            notas.forEach(function (nota) {

                if (!comprobarNota(nota)) {

                    errores.push(
                        "La nota " + nota.name +
                        " debe ser un número entre 0 y 10."
                    );

                    nota.classList.add("error");

                } else {

                    nota.classList.add("correcto");

                }

            });

            // Compruebo si existen errores
            if (errores.length > 0) {

                mensaje.innerHTML = errores.join("<br>");

            } else {

                // Si todos los datos son correctos,
                // envío el formulario a PHP
                mensaje.innerHTML = "";
                formulario.submit();

            }

        });

    </script>

</body>
</html>
