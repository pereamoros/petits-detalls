<?php
    include_once "../dades/menu.php";
    include_once "../dades/soci.php";

    $email = 'ES1700810423870001144920';
    if(validarIBAN($email)) {
        echo 'vàlid<br>';
    } else {
        echo 'fallaste<br>';
    }
?>
<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP (reemplaza con tus datos)
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USERNAME'];
        $mail->Password   = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = $_ENV['MAIL_PORT'];

        // Remitente
        $mail->setFrom($_ENV['MAIL_FROM_EMAIL'], $_ENV['MAIL_FROM_NAME']);
        // Destinatario
        $mail->addAddress($_ENV['MAIL_TO_EMAIL'], $_ENV['MAIL_TO_NAME']);

        // Contenido
        $mail->isHTML(true);
        $mail->Subject = 'Prueba de email con PHPMailer';
        $mail->Body    = 'Este es un email de prueba enviado desde PHPMailer.';

        // $mail->send();
        echo 'Mensaje enviado correctamente';
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
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
                            <label for="form-accept">* He llegit i accepto la <a href="#" target="_blank">política de privacitat</a> de Petits Detalls</label>
                        </div>

                        <div class="form-item" data-type="checkbox">
                            <input type="checkbox" name="news" id="form-news"/>
                            <label for="form-news">Vull rebre notícies sobre els projectes de Petits Detalls</label>
                        </div>
                    </div>

                    <div class="form-item-container u-justify-center">
                        <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        <div class="g-recaptcha" data-sitekey="6LcTLtokAAAAAED6gcZL4JAAUtJhKmDeVu_0_rrg"></div> -->
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