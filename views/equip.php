<?php
    include_once "../dades/menu.php";
    include_once "../dades/equip.php";
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
                <div class="equip__grid">
                    <?php
                    foreach($equip as $member) {
                        ($member == end($equip)) ? $class_last = " card-2__last": $class_last = "";
                    ?>
                        <div class="card-2<?=$class_last?>">
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

    <?
        include_once '../views/partials/footer.php';
    ?>
</body>
</html>