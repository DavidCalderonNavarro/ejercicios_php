<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3: Superglobals</title>

    <style>
        b{color: red;}
    </style>

</head>
<body>

<!-- Muestro los superglobales en una lista no ordenada -->

<ul>
<?php 

    echo '<li><b>Document-root: </b>'.$_SERVER['DOCUMENT_ROOT']. "</li>";
    echo '<li><b>Php-self: </b>'.$_SERVER['PHP_SELF']."</li>";
    echo '<li><b>Nombre del servidor: </b>'.$_SERVER['SERVER_NAME']."</li>";
    echo '<li><b>Server-software: </b>'.$_SERVER['SERVER_SOFTWARE']."</li>";
    echo '<li><b>Protocolo del servidor: </b>'.$_SERVER['SERVER_PROTOCOL']."</li>";
    echo '<li><b>Host de http: </b>'.$_SERVER['HTTP_HOST']."</li>";
    echo '<li><b>Usuario de agente http: </b>'.$_SERVER['HTTP_USER_AGENT']."</li>";
    echo '<li><b>ADDR remoto: </b>'.$_SERVER['REMOTE_ADDR']."</li>";
    echo '<li><b>Puerto remoto: </b>'.$_SERVER['REMOTE_PORT']."</li>";
    echo '<li><b>Nombre de script: </b>'.$_SERVER['SCRIPT_FILENAME']."</li>";
    echo '<li><b>URI de la solicitud: </b>'.$_SERVER['REQUEST_URI']."</li>";

?>
</ul>
<br><br><br><br>
<!-- El var_dump muestra la informacion mas detallada -->
<h1>var_dump: </h1>
<?php var_dump($_SERVER); ?>
<br><br><br><br>
<!-- El print_r muestra la informacion mas sencilla -->
<h1>Print_r: </h1>
<?php print_r($_SERVER); ?>

</body>
</html>