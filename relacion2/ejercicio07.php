<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div id="main" class="container" class="bg-secondary-subtle">
        <h2 class="text-primary text-center">Formulario de dos numeros</h2>
        <div class="row">
            <div class="col-md-3 col-sm-1 clo-0">
            </div>
            <div class="col-md-6 col-sm-10 clo-12">
                <form class="m5-5 border rounded p-3 shadow" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="n1" class="form-label fw-bold">Numero 1: </label>
                        <input type="number" name="n1" class="form-control" id="n1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                    </div>
                    <div class="mb-3">
                        <label for="n2" class="form-label fw-bold">Numero 2: </label>
                        <input type="number" name="n2" class="form-control" id="n2">
                    </div>
                    <button type="submit" class="btn btn-outline-info">Enviar</button>
                </form>

</body>
</htm