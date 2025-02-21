<?php
    ini_set('display_errors', 1);

    define('NOTFOUND_BASE_PATH', __DIR__ . '/..');
    require_once NOTFOUND_BASE_PATH . '/config/config.php'; 

    $arr_ignore = ['.', '..', 'config'];
    $content_path = BASE_PATH."/content/";
    $modified_path = BASE_PATH."/modified/";
    $files = array_diff(scandir($content_path), $arr_ignore);
    $modified_files = array_diff(scandir($modified_path), $arr_ignore);

    function getLang($string) {
        $codiIdioma = substr($string, 0, 2);
        switch ($codiIdioma) {
            case 'es':
                return "Español";
            case 'ca':
                return "Català";
            case 'en':
                return "English";
            default:
                return "";
        }
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
                <h1 class="admin-title">Admin Petits Detalls</h1>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="pill">
                    <h2 class="pill-header">Canvis pendents de verificar</h2>
                    <div class="pill-content">
                        <?php
                            if(empty($modified_files)) {
                                ?> <p>No hi ha arxius pendents de verificar</p> <?
                            } else {
                                foreach($modified_files as $file) {
                                    $modified_exist = BASE_PATH.'/modified/'.$file;
                                    $versio = (file_exists($modified_exist)) ? 'modified' : 'online';
                                    $file_name = substr($file, 0, -4);
                                    
                                    ?> <a class="admin-link" href="/admin/editar.php?file=<?=$file_name?>&verificar=true"><?=$file_name?></a> <?
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="pill">
                    <h2 class="pill-header">Edita el contingut de la web.</h2>
                    <div class="pill-content">
                        <?php
                            $lang_token = "";
                            foreach($files as $file) {
                                $modified_exist = BASE_PATH.'/modified/'.$file;
                                $versio = (file_exists($modified_exist)) ? 'modified' : 'online';
                                $file_name = substr($file, 0, -4);
                                if($lang_token !== getLang($file_name)) {
                                    $lang_token = getLang($file_name);
                                    ?> <h3><?=$lang_token?></h3> <?
                                }
                                
                                ?> <a class="admin-link" href="/admin/editar.php?file=<?=$file_name?>&versio=<?=$versio?>"><?=$file_name?></a> <?
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
</body>
</html>