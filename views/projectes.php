<?php
    include_once BASE_PATH.'/dades/menu.php';
    include_once BASE_PATH.'/dades/projectes.php';
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
    
    <? include_once BASE_PATH.'/includes/head.php'; ?>

</head>
<body>

    <? include_once BASE_PATH.'/views/partials/header.php'; ?>

    <main>
        <section class="hero-img">
            <div class="container">
                <h1><?=$content_h1?></h1>
            </div>
        </section>

        <section>
            <div class="container">

                <div class="project__grid">
                    <? foreach($projectes as $projecte) { ?>
                        <div class="card">
                            <div class="card__img">
                                <img src="<?=$projecte["img"]?>" alt="<?=$projecte["name"]?> - Petits Detalls">
                            </div>
                            <div class="card__text">
                                <h3><?=$projecte["name"]?></h3>
                                <p><?=$projecte["description"]?></p>
                            </div>
                            <a href="<?=$projecte["url"]?>" class="cta cta--c2" title="<?=$projecte["name"]?>"><?=$btn_text?></a>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>
    </main>

    <? include_once BASE_PATH.'/views/partials/footer.php'; ?>
</body>
</html>