<?php
    include_once BASE_PATH.'/dades/menu.php';
    include_once BASE_PATH.'/dades/publicacions.php';
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
    <script src="/src/pdfjs/build/pdf.js" type="module"></script>
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

                <div class="info-text text">
                    <p><?=$t_info_1?></p>
                    <p><?=$t_info_2?></p>
                </div>

                <div class="publicacio-grid">

                    <?php foreach($publicacions as $publicacio) { ?>

                        <div class="publicacio">
                            <div class="publicacio-title"><?=$publicacio["title"]?></div>
                            <p class="text"><?=$publicacio["desc"]?></p>
                            <div class="publicacio-cta">
                                <a href="#publicacions-iframe" class="cta cta--c2" data-src="<?=$publicacio["pdf"]?>" data-h2="<?=$publicacio["title"]?>" onclick="goToIframe(this)"><?=$cta_veure?></a>
                            </div>
                        </div>

                    <? } ?>
                </div>               
            </div>
        </section>

        <section>
            <div class="container">

                <div class="publicacions-canvas">
                    <div class="canvas-container">
                        <h2>Selecciona un document del llistat</h2>
                        <div class="canvas-content">
                            <div class="canvas-content__text">
                                <p class="canvas-text">Per a llegir de manera online algun document, selecciona una publicació de les llistades més amunt. Si ho prefereixes, també pots descarregar el document.</p>
                                <span id="canvas-page" class="canvas-page">Pàgina: <span id="page_num"></span> / <span id="page_count"></span></span>
                            </div>    
                            <div class="canvas-content__canvas">
                                <button class="canvas-btn" id="prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 6l-6 6l6 6" /></svg>
                                </button>
                                <canvas id="the-canvas"></canvas>
                                <button class="canvas-btn" id="next">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6l-6 6" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <? include_once BASE_PATH.'/views/partials/footer.php'; ?>
</body>
</html>