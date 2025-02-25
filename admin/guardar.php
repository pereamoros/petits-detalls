<?php
    ini_set('display_errors', 1);
    
    require_once './validar_sesion.php';

    $file = basename($_POST['file']);
    $nuevasVariables = $_POST['variables'];
    $file_php = $file.'.php';
    $file_name = substr($file, 3);
    $error_message = [];

    if(preg_match('/^[a-zA-Z0-9_-]+\.php$/', $file_php)) {

        if(file_exists(BASE_PATH.'/content/'.$file_php)) {
            
            require_once BASE_PATH.'/content/'.$file_php;
            require_once BASE_PATH.'/content/config/'.$file_name.'.php';
        
            // Actualitza les variables
            foreach ($nuevasVariables as $nombre => $valor) {
                $$nombre = $valor;
            }

            // Construeix el nou contingut de l'arxiu
            $nuevoContenido = "<?php\n";
            foreach ($variables as $nombre => $variable) {
                if ($$nombre === "0" || $$nombre === "1") {
                    $nuevoContenido.= '$'.$nombre.' = '.($$nombre === "1" ? 'true' : 'false').";\n";
                } else {
                    $nuevoContenido.= '$'.$nombre.' = "'.$$nombre.'";' . "\n";
                }
            }
            $nuevoContenido .= "?>";

            // Escribir el nuevo contenido en el archivo
            if (file_put_contents(BASE_PATH.'/modified/'.$file_php, $nuevoContenido)) {
                $error_message[] = "Arxiu guardat correctament.";
            } else {
                $error_message[] = "Error al guardar l'arxiu.";
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
                <h1>Resposta d'edició</h1>
                <?php foreach($error_message as $message) { ?>
                    <p><?=$message?></p> 
                <? } ?>
            </div>
        </section>
    </main>
</body>
</html>