<?php
    // print errors
    ini_set('display_errors', 1);

    define('NOTFOUND_BASE_PATH', __DIR__ . '/..');
    require_once NOTFOUND_BASE_PATH . '/config/config.php'; 

    if(!isset($idioma)) { $idioma = 'cat'; }
    include_once BASE_PATH."/dades/menu.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petits Detalls</title>
    <meta name="description" content="Petits Detalls">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" href="/petits-detalls-favicon.ico" sizes="any" type="image/x-icon">
    <link rel="stylesheet" href="/css/min-main.css">
</head>
<body>

    <? include_once BASE_PATH.'/views/partials/header.php'; ?>
    <main>
        <section>
            <div class="container">
                <h1>error 404</h1>
                <p>La pàgina que busques no existeix.</p>
                <a href="/" style="text-decoration:underline">Tornar a la pàgina principal</a>
            </div>
        </section>
    </main>

    <? include_once BASE_PATH.'/views/partials/footer.php'; ?>
</body>
</html>