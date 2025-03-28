<?php
    include_once BASE_PATH.'/dades/menu.php';
    include_once BASE_PATH.'/dades/collabora.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
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

                <div class="colabora-donacio">
                    <h3><?=$t_donacio_h3?></h3>
                    <p><?=$t_donacio_p?></p>
                </div>

                <div class="colabora__container">
                    <div class="colabora__img">
                        <img src="/images/colabora-petits-detalls.webp" alt="<?=$content_h1?>" />
                    </div>

                    <div class="colabora__text">
                        <?php foreach($colabora_flex as $colabora_item) { 
                            (esEnlaceExterno($colabora_item['cta-link'])) ? $link_target = ' target="_blank"' : $link_target = ""; 
                        ?>
                            <div class="text-card">
                                <h2><?=$colabora_item['h2']?></h2>
                                <div class="text-card__text"><?=$colabora_item['text']?></div>
                                <a class="cta <?=$colabora_item['cta-class']?>" href="<?=$colabora_item['cta-link']?>"<?=$link_target?>><?=$colabora_item['cta-text']?></a>
                            </div>
                        <? } ?>
                    </div>
                </div>
                
                <p><?=$colabora_text_final?></p>
            </div>
        </section>
    </main>

    <? include_once BASE_PATH.'/views/partials/footer.php'; ?>
</body>
</html>