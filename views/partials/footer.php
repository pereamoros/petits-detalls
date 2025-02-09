<? include_once BASE_PATH.'/dades/footer.php'; ?>

<footer>
    <div class="donacio">
        <div class="container">
            <div class="donacio__content">
                <h2><?=$donacio_h2?></h2>
                <p class="donacio__text"><?=$donacio_iban?></p>
                <p class="donacio__text"><?=$donacio_bizum?></p>
    
                <p><?=$donacio_text?></p>
                <a href="#" class="cta cta--cw"><?=$donacio_cta?></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer__content">
            <div class="footer__info footer__info--info">
                <img src="/images/logo-petits-detalls-white.png" alt="Logo de Petits Detalls" class="footer__logo">
                <p><?=$footer_mail?></p>
                <p><?=$footer_nie?></p>
            </div>

            <div class="footer__info">
                <div class="footer__list-title"><?=$footer_menu_title_1?></div>
                <ul>
                    <?php
                        foreach ($footer_menu_1 as $item) {
                            ?>
                            <li><a href="<?=$item['url']?>" title="<?=$item['title']?>"><?=$item['name']?></a></li>
                            <?php
                        }
                    ?>
                </ul>
            </div>

            <div class="footer__info">
                <div class="footer__list-title"><?=$footer_menu_title_2?></div>
                <ul>
                    <?php
                        foreach ($footer_menu_2 as $item) {
                            ?>
                            <li><a href="<?=$item['url']?>" title="<?=$item['title']?>"><?=$item['name']?></a></li>
                            <?php
                        }
                    ?>
                </ul>
            </div>

            <div class="footer__info">
                <div class="footer__list-title"><?=$footer_menu_title_3?></div>

                <div class="footer__social">
                    <?php foreach($menu_social as $menu_social_item) { ?>
                        <a href="<?=$menu_social_item['url']?>" title="<?=$menu_social_item['title']?>" target="_blank">
                            <?=$menu_social_item['svg']?>
                        </a>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__legal">
        <div class="container">
            <span><?=$avis_legal?> ©<?=date("Y")?></span>
        </div>
    </div>
</footer>
<script src="/src/js/script.js"></script>