<?php
    // print errors
    ini_set('display_errors', 1);
    include_once "../dades/menu.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petits Detalls</title>
    <meta name="description" content="Petits Detalls">
    <meta name="keywords" content="">
    <meta name="author" content="Petits Detalls">
    
    <!-- <link rel="icon" href="img/favicon.ico"> -->
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <!-- HEADER -->
    <?
        include_once '../views/partials/header.php';
    ?>
    <!-- MAIN -->
    <section>
        <div class="container">
            <h1>error 404</h1>
            <p>La pàgina que busques no existeix.</p>
            <a href="/">Tornar a la pàgina principal</a>
        </div>
    </section>

    <!-- FOOTER -->
    <?
        include_once '../views/partials/footer.php';
    ?>
</body>
</html>