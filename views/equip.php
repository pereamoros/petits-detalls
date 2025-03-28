<?php
    include_once BASE_PATH.'/dades/menu.php';
    include_once BASE_PATH.'/dades/equip.php';
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
                <div class="equip__grid">
                    <?php
                    foreach($equip as $member) {
                    ?>
                        <div class="card-2">
                            <div class="card-2__img">
                                <img src="<?=$member["img"]?>" alt="Equip Petits Detalls - <?=$member["name"]?>">
                            </div>
                            <div class="card-2__text">
                                <h3><?=$member["name"]?></h3>
                                <p><?=$member["role"]?></p>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <p class="u-text-align-center"><?=$team_contact_text?></p>
            </div>
        </section>
    </main>

    <? include_once BASE_PATH.'/views/partials/footer.php'; ?>
</body>
</html>