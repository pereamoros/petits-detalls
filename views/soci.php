<?php
    include_once BASE_PATH.'/dades/menu.php';
    include_once BASE_PATH.'/dades/soci.php';

    if($idioma === 'cat') {
        $t_accept_politica = "Has d'acceptar la política de privacitat per continuar.";
    } else if($idioma === 'esp') {
        $t_accept_politica = "Debes aceptar la política de privacidad para continuar.";
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?=$_ENV['CAPTCHA_CLIENT']?>" async defer></script>

    <script>
        var recaptcha_client_key = '<?=$_ENV['CAPTCHA_CLIENT']?>';
        $(document).ready(function() {
            $("[name='form-soci']").submit(function(e) {
                e.preventDefault();
                const responseContainer = document.getElementById("post-response"); 
                responseContainer.innerHTML = "";

                var name = document.querySelector('input[name="name"]').value,
                    dni = document.querySelector('input[name="dni"]').value,
                    email = document.querySelector('input[name="email"]').value,
                    telefon = document.querySelector('input[name="telefon"]').value,
                    direccio = document.querySelector('input[name="direccio"]').value,
                    iban = document.querySelector('input[name="iban"]').value,
                    cuota = document.querySelector('select[name="cuota"]').value,
                    importe = document.querySelector('input[name="importe"]').value,
                    missatge = document.querySelector('textarea[name="missatge"]').value,
                    accept = document.querySelector('input[name="accept"]').checked,
                    news = document.querySelector('input[name="news"]').checked,
                    idioma = document.querySelector('#form-idioma').value
                    acceptText = document.querySelector('#form-accept-text').value

                if (!accept) {
                    $('#post-response').html('<div class="form-response">'+acceptText+'</div>');
                    return;
                }

                grecaptcha.ready(function() {
                    grecaptcha.execute(recaptcha_client_key, 
                        {action: 'submit'}
                    ).then(function(token) {
                        $.ajax({
                            type: 'post',
                            url: '/src/ajax-controllers/form-soci.php',
                            data: {
                                'name': name,
                                'dni': dni,
                                'email': email,
                                'telefon': telefon,
                                'direccio': direccio,
                                'iban': iban,
                                'cuota': cuota,
                                'importe': importe,
                                'missatge': missatge,
                                'news': news,
                                'idioma': idioma,
                                'captcha-response': token
                            },
                            cache: false,
                            success: function(data) {
                                const newDiv = document.createElement("div");
                                newDiv.classList.add("form-response");
                                document.getElementById("post-response").appendChild(newDiv)

                                const response = JSON.parse(data);

                                if(response.success) {
                                    document.querySelector('form[name="form-soci"]').reset();
                                    newDiv.innerHTML = response.message;
                                } else {
                                    response.message.forEach(error => {
                                        const parrafo = document.createElement("p");
                                        parrafo.textContent = error;
                                        newDiv.appendChild(parrafo);
                                    });
                                }
                            }
                        });

                        return false;
                    });
                });
            });
        });
    </script>

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

                <form class="form-container" method="post" name="form-soci">

                    <div class="form-item-container">
                        <input type="text" hidden value="<?=$idioma?>" id="form-idioma">
                        <input type="text" hidden value="<?=$t_accept_politica?>" id="form-accept-text">

                        <div class="form-item">
                            <label for="form-name"><?=$form_name?></label>
                            <input type="text" name="name" id="form-name" placeholder="" required/>
                        </div>

                        <div class="form-item">
                            <label for="form-dni"><?=$form_dni?></label>
                            <input type="text" name="dni" id="form-dni" placeholder="" required/>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item">
                            <label for="form-email"><?=$form_email?></label>
                            <input type="text" name="email" id="form-email" required/>
                        </div>

                        <div class="form-item">
                            <label for="form-telefon"><?=$form_telefon?></label>
                            <input type="text" name="telefon" id="form-telefon" required/>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item">
                            <label for="form-direccio"><?=$form_direccio?></label>
                            <input type="text" name="direccio" id="form-direccio" required/>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item">
                            <label for="form-iban"><?=$form_iban?></label>
                            <input type="text" name="iban" id="form-iban" required/>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item" data-type="select">
                            <label for="form-cuota"><?=$form_cuota?></label>
                            <select id="form-cuota" name="cuota">
                                <option value="mensual"><?=$form_mensual?></option>
                                <option value="anual"><?=$form_anual?></option>
                                <option value="personalitzada"><?=$form_personalitzada?></option>
                            </select>
                        </div>

                        <div class="form-item">
                            <label for="form-import"><?=$form_import?></label>
                            <input type="text" name="importe" id="form-import" required/>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item">
                            <label for="form-missatge"><?=$form_missatge?></label>
                            <textarea type="text" name="missatge" id="form-missatge" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item" data-type="checkbox">
                            <input type="checkbox" name="accept" id="form-accept"/>
                            <label for="form-accept"><?=$form_accept_pp?></label>
                        </div>

                        <div class="form-item" data-type="checkbox">
                            <input type="checkbox" name="news" id="form-news"/>
                            <label for="form-news"><?=$form_news?></label>
                        </div>
                    </div>

                    <div class="form-item-container">
                        <div class="form-item" data-type="submit">
                            <button type="submit" class="cta cta--cw"><?=$form_send?></button>
                        </div>
                    </div>
                </form>

                <div id="post-response"></div>

            </div>


        </section>

    </main>

    <? include_once BASE_PATH.'/views/partials/footer.php'; ?>
</body>
</html>