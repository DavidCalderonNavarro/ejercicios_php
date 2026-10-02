<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Muestro los superglobales en una lista no ordenada -->

<ul>

<li><?php echo 'Document-root: '.$_SERVER['DOCUMENT_ROOT'];?></li>
<li><?php echo 'Php-self: '.$_SERVER['PHP_SELF'];?></li>
<li><?php echo 'Nombre del servidor: '.$_SERVER['SERVER_NAME'];?></li>
<li><?php echo 'Server-software: '.$_SERVER['SERVER_SOFTWARE'];?></li>
<li><?php echo 'Protocolo del servidor: '.$_SERVER['SERVER_PROTOCOL'];?></li>
<li><?php echo 'Host de http: '.$_SERVER['HTTP_HOST'];?></li>
<li><?php echo 'Usuario de agente http: '.$_SERVER['HTTP_USER_AGENT'];?></li>
<li><?php echo 'ADDR remoto: '.$_SERVER['REMOTE_ADDR'];?></li>
<li><?php echo 'Puerto remoto: '.$_SERVER['REMOTE_PORT'];?></li>
<li><?php echo 'Nombre de script: '.$_SERVER['SCRIPT_FILENAME'];?></li>
<li><?php echo 'URI de la solicitud: '.$_SERVER['REQUEST_URI'];?></li>
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