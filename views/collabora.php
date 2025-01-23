<?php
    include_once "../dades/menu.php";
    include_once "../dades/collabora.php";
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

    <?
        include_once '../views/partials/header.php';
    ?>

    <main>
        <section class="hero-img">
            <div class="container">
                <h1><?=$content_h1?></h1>
            </div>
        </section>

        <section>
            <div class="container">

                <div class="colabora-donacio">
                    <h3>Pots fer una donació a:</h3>
                    <p><b>ES98 2100 0423 9702 0037 2970</b> (La Caixa)<br/> BIZUM: <b>33591</b></p>
                </div>


                <div class="colabora__flex">
                    <?php foreach($colabora_flex as $colabora_item) { ?>
                        <div class="text-card">
                            <h2><?=$colabora_item['h2']?></h2>
                            <div class="text-card__text"><?=$colabora_item['text']?></div>
                            <a class="cta <?=$colabora_item['cta-class']?>" href="<?=$colabora_item['cta-link']?>"><?=$colabora_item['cta-text']?></a>
                        </div>
                    <? } ?>
                </div>

                <div class="colabora__flex">
                    <div class="text-card">
                        <h2><?=$colaboracions['h2']?></h2>
                        <div class="text-card__text"><?=$colaboracions['text']?></div>
                        <a class="cta <?=$colaboracions['cta-class']?>" href="<?=$colaboracions['cta-link']?>"><?=$colaboracions['cta-text']?></a>
                    </div>
                </div>
                
                <p><?=$colabora_text_final?></p>
            </div>
        </section>
    </main>

    <?
        include_once '../views/partials/footer.php';
    ?>
</body>
</html>