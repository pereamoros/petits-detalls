<?php
    $url_projecte = $request;
    $projecte_detall = ltrim($correspondencies[0], "/");
    include_once BASE_PATH.'/dades/menu.php';
    include_once BASE_PATH.'/dades/projectes.php';
    include_once BASE_PATH.'/dades/projectes/'.$projecte_detall.'.php';

    // text constants
    if($idioma == "cat") {
        $pilars_text = "Els pilars en els quals s'estructura el projecte són:";
    } 
    else if($idioma == "esp") {
        $pilars_text = "Los pilares en los que se estructura el proyecto son:";
    }
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
        <section class="hero-video">
            <div class="container">
                <video autoplay muted loop playsinline poster="<?=$video_img_url?>">
                    <source src="<?=$video_url?>" type="video/mp4">
                    Tu navegador no soporta la etiqueta de video.
                </video>

                <div class="hero-video__content">
                    <h1><?=$content_h1?></h1>
                </div>
            </div>
        </section>

        <article>
            <section class="project-detall__section">
                <div class="container">
                    <div class="project-detall__content">
                        <div class="project-detall__text text">
                            <?=$content_text?>
                            
                            <div class="project-detall__features">
                                <h3><?=$pilars_text?></h3>
                                <div class="pilars__grid">
                                    <?php foreach ($pilars as $pilar) { ?>
                                        <div class="feature">
                                            <?=$pilar["svg"]?>
                                            <div class="feature__text">
                                                <span><?=$pilar["h3"]?></span>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                        </div>
                        <div class="project-detall__helper"></div>
                    </div>
                    
                </div>
                <div class="project-detall__image">
                    <img src="<?=$video_img_url?>" alt="">
                </div>
            </section>

            <section class="gallery-segmented">
                <?php foreach ($gallery_segmented as $gallery_img) {
                    ($gallery_img == end($gallery_segmented)) ? $gallery_img_last = " gallery-segmented__img--last": $gallery_img_last = "";
                ?>
                    <div class="gallery-segmented__img<?=$gallery_img_last?>">
                        <img src="<?=$gallery_img?>" alt="<?=$content_h1?> - Petits Detalls">
                    </div>
                <? } ?>
            </section>
        </article>
        
        <article>
            <section>
                <div class="container">
                    <h2 class="scroll-fade-in">Veure més projectes</h2>
                    <div class="random__grid">
                        <?php
                        foreach($projectes as $key => $project) {
                            if($project['url'] === $url_projecte) {
                              $k = $key;
                            }
                        }
                        $random_projectes = $projectes;
                        unset($random_projectes[$k]);
                        $random_projectes = array_rand($random_projectes, 2);

                        foreach ($random_projectes as $random) { ?>
                            <div class="card scroll-fade-in">
                                <div class="card__img">
                                    <img src="<?=$projectes[$random]["img"]?>" alt="<?=$projectes[$random]["name"]?> - Petits Detalls">
                                </div>
                                <div class="card__text">
                                    <h3><?=$projectes[$random]["name"]?></h3>
                                    <p><?=$projectes[$random]["description"]?></p>
                                </div>
                                <a href="<?=$projectes[$random]["url"]?>" class="cta cta--c2" title="<?=$projectes[$random]["name"]?>"><?=$btn_text?></a>
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