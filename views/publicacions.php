<?php
    include_once BASE_PATH.'/dades/menu.php';
    include_once BASE_PATH.'/dades/publicacions.php';

    $publicacions = json_decode(file_get_contents('./src/publicacions/publicacions.json'), true);
?>
<!DOCTYPE html>
<html lang="es">
<head>    
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
                            <div class="publicacio-title"><?=$publicacio["title"][$idioma_json]?></div>
                            <p class="text"><?=$publicacio["descripcio"][$idioma_json]?></p>
                            <div class="publicacio-cta">
                                <a href="#the-canvas" class="cta cta--c2" data-src="/src/publicacions/<?=$publicacio["arxiu"]?>" data-h2="<?=$publicacio["title"][$idioma_json]?>" onclick="goToIframe(this)"><?=$cta_veure?></a>
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
                        <h2><?=$h2_pdf_viewer?></h2>
                        <div class="canvas-content">
                            <div class="canvas-content__text">
                                <p class="canvas-text"><?=$text_pdf_viewer?></p>
                                <span id="canvas-page" class="canvas-page"><?=$text_page?>: <span id="page_num"></span> / <span id="page_count"></span></span>
                                <div class="canvas-page__input">
                                    <input type="number" id="page-input" style="width:75px;">
                                    <button id="go-to-page"><?=$text_go_to_page?></button>
                                </div>
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