<?php
    ini_set('display_errors', 1);

    require_once './validar_sesion.php';

    $file = basename($_POST['file']);
    $file_php = $file.'.php';
    $file_name = substr($file, 3);
    $error_message = [];
    $content_file_path = BASE_PATH.'/content/'.$file_php;

    if(preg_match('/^[a-zA-Z0-9_-]+\.php$/', $file_php)) {
        // crear carpeta amb la data dins de versions
        $today = date('Y\-m\-d');
        $versions_dir = BASE_PATH.'/versions/'.$today;
        if(!is_dir($versions_dir)) {
            mkdir($versions_dir, 0755);
        }

        if(file_exists($content_file_path)) {
            require_once $content_file_path;
            require_once BASE_PATH.'/content/config/'.$file_name.'.php';

            // guardar una copia de l'arxiu de content a versions
            if(copy($content_file_path, $versions_dir.'/'.$file_php)) {
                // penjar l'arxiu de modified a content
                if(rename(BASE_PATH.'/modified/'.$file_php, $content_file_path))  {
                    $error_message[] = "Arxiu actualitzat correctament.";
                } else {
                    $error_message[] = "Error a l'actualitzar l'arxiu.";
                }
            } else {
                $error_message[] = "Error al crear la copia de seguretat.";
            }
        } else {
            $error_message[] = "No s'ha trobat l'arxiu o no existeix.";
        }
    } else {
        $error_message[] = "L'arxiu carregat no és vàlid.";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Petits Detalls</title>
    <meta name="author" content="Petits Detalls">
    <link rel="stylesheet" href="/admin/style.css">
</head>
<body>
    <main>
        <section>
            <div class="container">
                <a href="/admin">Torna a la pàgina principal</a>
                <h1>Resposta de verificació</h1>
                <?php foreach($error_message as $message) { ?>
                    <p><?=$message?></p> 
                <? } ?>
            </div>
        </section>
    </main>
</body>
</html>