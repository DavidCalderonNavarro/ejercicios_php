<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi hola mundo en php</title>

    <style>

        #estilo {

        color: blue;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;text-align: center;font-size: larger;

        }

    </style>

</head>
<body>
    <!-- hello world como texto basico -->
    <?php echo'Hello World'; ?>
    <!-- hello world como encabezado de nivel 2 -->
    <h2><?php echo'Hello World'; ?></h2>
    <!-- hello world con distinto color -->
    <p style="color: red;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;text-align: center;font-size: larger;"><?php echo'Hello World'; ?></p>
    <p id="estilo"><?php echo'Hello World'; ?></p>
    <!-- hello world como encabezado de nivel 2 -->
    <h2><?php echo'Hello <br> World'; ?></h2>
    <!-- Info sobre version php -->
    <?php echo 'Version de php: '.phpversion(); ?>
    <?php echo phpinfo(); ?>
    <!-- Info sobre fecha y hora -->
    <?php echo date("l jS \of F Y h:i:s A"); ?><br>
    <?php echo date("d/m/Y h:i:s A"); ?>


</body>
</html>