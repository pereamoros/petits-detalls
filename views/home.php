<?php
    include_once BASE_PATH.'/dades/menu.php';
    include_once BASE_PATH.'/dades/home.php';
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
        <article>
            <section class="hero-video">
                <div class="container">
                    <video autoplay muted loop playsinline poster="/images/petits-detalls-hero.webp">
                        <source src="/images/petits-detalls-hero.mp4" type="video/mp4">
                        Tu navegador no soporta la etiqueta de video.
                    </video>

                    <div class="hero-video__content">
                        <h1><?=$content_h1?></h1>
                        <span><?=$hero_span?></span>
                        <a href="/collabora" class="cta cta--t"><?=$hero_cta?></a>
                    </div>
                </div>
            </section>

            <section class="introduction">
                <div class="container">
                    <div class="introduction__content">
                        <div class="introduction__text text">
                            <?=$intro_text_1?>
                        </div>
                        <div class="introduction__image">
                            <img src="/images/mapa-africa-uganda-petits-detalls.png" alt="<?=$intro_foto_alt_1?>">
                        </div>
                    </div>

                    <div class="introduction__content introduction__content--reverse">
                        <div class="introduction__image">
                            <img src="/images/mapa-uganda-busoga-petits-detalls.png" alt="<?=$intro_foto_alt_2?>">
                        </div>
                        <div class="introduction__text text">
                            <?=$intro_text_2?>
                        </div>
                    </div>
                </div>
            </section>
        </article>

        <section>
            <div class="gallery-img" id="gallery-container">
                <div class="gallery-img__slider" id="gallery-slide">
                    <?
                        $dir    = 'images/slider-home';
                        $images = scandir($dir);
                        $array_ignore = ['.','..'];
                        $images_clean = array_diff($images, $array_ignore);
                        foreach($images_clean as $image) {
                            if(!is_dir($image)) {
                            ?>
                                <img src="/images/slider-home/<?=$image?>" alt="<?=$image?>" />
                            <?
                            }
                        }
                    ?>

                </div>
            </div>

            <script>
                const galleryContainer = document.querySelector("#gallery-container");
                const copy = document.querySelector("#gallery-slide").cloneNode(true);
                galleryContainer.appendChild(copy);
            </script>
        </section>
        
        <article>
            <section>
                <div class="container">
                    <div class="heading__secondary scroll-fade-in">
                        <div class="heading__secondary--helper"></div>
                        <h2><?=$missio_visio_h2?></h2>
                    </div>

                    <div class="missio-visio">
                        <?php foreach($missio_visio as $mv) { ?>
                            <div class="feature feature--left scroll-fade-in">
                                <div class="feature__text">
                                    <h3><?=$mv["h3"]?></h3>
                                    <p><?=$mv["text"]?></p>
                                </div>
                            </div>
                        <? } ?>
                    </div>

                    <div class="allo-que-ens-mou__grid">
                        <?php foreach($allo_que_ens_mou as $allo) { ?>
                            <div class="feature scroll-fade-in">
                                <?=$allo["svg"]?>
                                <div class="feature__text">
                                    <h3><?=$allo["h3"]?></h3>
                                    <p><?=$allo["text"]?></p>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </section>
            
            <section>
                <div class="container">
                    <div class="heading__secondary scroll-fade-in">
                        <div class="heading__secondary--helper"></div>
                        <h2><?=$impacte_h2?></h2>
                    </div>
                    <div class="impacte__grid">
                        <?php foreach($impacte as $impact_item) { ?>
                            <div class="feature scroll-fade-in">
                                <div class="feature__text">
                                    <h3><?=$impact_item["h3"]?></h3>
                                    <p class="feature__text--num"><?=$impact_item["num"]?></p>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <? include_once BASE_PATH.'/views/partials/footer.php'; ?>
</body>
</html>