<?php
    // print errors
    ini_set('display_errors', 1);

    // FORBIDDEN si no accedeixen al document via AJAX
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
        http_response_code(403);
        require __DIR__.'/../../../views/403.php';
        exit;
    }

    header("X-Robots-Tag: noindex, nofollow", true);
    require_once __DIR__ .'/../../../config/config.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['captcha-response'];
        $recaptcha_api_key = $_ENV['CAPTCHA_SERVER'];
        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_api_key&response=$captcha&remoteip=$ip");
        $atributos = json_decode($respuesta, true);

        if($atributos['success'] == 1 && $atributos['score'] >= 0.5) {
            
            $error_message = [];
            $form_name = htmlspecialchars(trim($_POST['name']));
            $form_dni = strtoupper(str_replace(array(' ', '-'), '', $_POST['dni']));
            $form_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $form_telefon = htmlspecialchars(trim($_POST['telefon']));
            $form_direccio = htmlspecialchars(trim($_POST['direccio']));
            $form_iban = strtoupper(str_replace(' ', '', $_POST['iban']));
            $form_cuota = htmlspecialchars($_POST['cuota']);
            $form_import = filter_var($_POST['importe'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $form_missatge = htmlspecialchars(trim($_POST['missatge']));
            $form_news = $_POST['news'];
            $idioma = $_POST['idioma'];
    
            // Text
            $t_error3 = "Error";
            $t_missatge = "L'usuari no ha enviat cap missatge";
            if($idioma === 'cat') {
                $t_dni = "El DNI insertat no és vàlid.";
                $t_email = "L'email insertat no és vàlid.";
                $t_success = "Missatge enviat correctament";
                $t_error = "Error a l'enviar el missatge:";
                $t_error2 = "Reviseu les dades insertades. Si l'error persisteix, contacteu a info@petitsdetalls.org";
                $t_error3 = "Hi ha hagut un error inesperat. Refresqueu la pàgina i torneu-ho a provar.";
            } else if($idioma === 'esp') {
                $t_dni = "El DNI insertado no es válido.";
                $t_email = "El email insertado no es válido.";
                $t_success = "Mensaje enviado correctamente";
                $t_error = "Error al enviar el mensaje:";
                $t_error2 = "Revisad los datos insertados. Si el error persiste, contactad a info@petitsdetalls.org";
                $t_error3 = "Ha habido un error inesperado. Refresque la página e intentelo de nuevo.";
            }
    
            if(empty($form_missatge)) { $form_missatge = $t_missatge; }
            $form_news = ($form_news === "true") ? "SI" : "NO";
    
            // Validació
            if(!validarDNI($form_dni)) {
                $error_message[]= $t_dni;
            }
            if(!validarEmail($form_email)) {
                $error_message[]= $t_email;
            }
            
            if(empty($error_message)) {
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
                    $mail->CharSet = 'UTF-8';
                    $mail->Subject = 'Alta de soci';
                    $mail->Body = '<!DOCTYPE html>
                    <html lang="es">
                    <head>
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <title>Nuevo mensaje del formulario</title>
                        <style>
                            body{font-family:sans-serif;line-height:1.5;margin:0;padding:20px}table{width:100%;max-width:600px;margin:20px auto;border-collapse:collapse}td,th{padding:10px;border:1px solid #ddd}th{background-color:#f5f5f5;text-align:left}@media (max-width:600px){table,td,th{width:100%}td,th{display:block}}
                        </style>
                    </head>
                    <body>
                        <h2>Nova alta de soci</h2>
                        <table>
                            <tr>
                                <th>Nom i cognoms</th>
                                <td>'.$form_name.'</td>
                            </tr>
                            <tr>
                                <th>DNI</th>
                                <td>'.$form_dni.'</td>
                            </tr>
                            <tr>
                                <th>Correu electrònic</th>
                                <td>'.$form_email.'</td>
                            </tr>
                            <tr>
                                <th>Telèfon</th>
                                <td>'.$form_telefon.'</td>
                            </tr>
                            <tr>
                                <th>Direcció</th>
                                <td>'.$form_direccio.'</td>
                            </tr>
                            <tr>
                                <th>IBAN</th>
                                <td>'.$form_iban.'</td>
                            </tr>
                            <tr>
                                <th>Tipus de cuota</th>
                                <td>'.$form_cuota.'</td>
                            </tr>
                            <tr>
                                <th>Colaboració en import</th>
                                <td>'.$form_import.'</td>
                            </tr>
                            <tr>
                                <th>Missatge</th>
                                <td>'.$form_missatge.'</td>
                            </tr>
                            <tr>
                                <th>Rebre notícies</th>
                                <td>'.$form_news.'</td>
                            </tr>
                        </table>
                    </body>
                    </html>
                    ';
            
                    $mail->send();
                    $error_message[]= $t_success;
                    echo json_encode(['success'=> true, 'message'=> $error_message]);
                } catch (Exception $e) {
                    $error_message[]= $t_error." {$mail->ErrorInfo}";
                    echo json_encode(['success'=> false, 'message'=> $error_message]);
                }
            } else {
                $error_message[]= $t_error2;
                echo json_encode(['success'=> false, 'message'=> $error_message]);
            }

        } else {
            echo json_encode(['success'=> false, 'message'=> $error_message]);

        } 
    }

    
?>