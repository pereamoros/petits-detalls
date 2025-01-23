<?php
    include_once "../dades/menu.php";
    include_once "../dades/soci.php";
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
                <form class="form-container" method="post" action="">

                    <div class="form-item-container">
                        <div class="form-item">
                            <label for="form-nom-cognom">Nom i Cognoms</label>
                            <input type="text" name="nom-cognom" id="form-" placeholder="" required/>
                        </div>

                        <div class="form-item">
                            <label for="form-dni-nif">DNI - NIF</label>
                            <input type="text" name="dni-nif" id="form-dni-nif" placeholder="" required/>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item">
                            <label for="form-email">Correu electrònic</label>
                            <input type="text" name="email" id="form-email" required/>
                        </div>

                        <div class="form-item">
                            <label for="form-telefon">Telèfon</label>
                            <input type="text" name="telefon" id="form-telefon" required/>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item">
                            <label for="form-direccio">Direcció (incluir ciutat i codi postal)</label>
                            <input type="text" name="direccio" id="form-direccio" required/>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item">
                            <label for="form-iban">Compte bancari IBAN</label>
                            <input type="text" name="iban" id="form-iban" required/>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item" data-type="select">
                            <label for="form-cuota">Tipus de cuota</label>
                            <select id="form-cuota" name="cuota">
                                <option value="mensual">Mensual</option>
                                <option value="anual">Anual</option>
                                <option value="personalitzada">Personalitzada</option>
                            </select>
                        </div>

                        <div class="form-item">
                            <label for="form-import">Col·laboració en import €</label>
                            <input type="text" name="import" id="form-import" required/>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item">
                            <label for="form-iban">Missatge (opcional)</label>
                            <textarea type="text" name="iban" id="form-iban" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item" data-type="checkbox">
                            <input type="checkbox" name="accept" id="form-accept" required/>
                            <label for="form-accept">* He llegit i accepto la <a href="#">política de privacitat</a> de Petits Detalls</label>
                        </div>

                        <div class="form-item" data-type="checkbox">
                            <input type="checkbox" name="news" id="form-news"/>
                            <label for="form-news">Vull rebre notícies sobre els projectes de Petits Detalls</label>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item" data-type="submit">
                            <button type="submit" class="cta cta--cw">Enviar</button>
                        </div>
                    </div>
                </form>


            </div>


        </section>

    </main>

    <?
        include_once '../views/partials/footer.php';
    ?>
</body>
</html>