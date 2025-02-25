<?php
    ini_set('display_errors', 1);
   
    require_once './validar_sesion.php';

    $file = basename($_GET['file']);

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

    if(preg_match('/^[a-zA-Z0-9_-]/', $file)) {
        // Sanitizar el nombre del archivo
        $file = preg_replace('/[^a-zA-Z0-9_-]/', '', $file);
        $file_php = $file.'.php';
        $file_name = substr($file, 3);
        $uc_file_name = ucfirst($file_name);
        
        $versio = $_GET["versio"]?? '';
        if (!in_array($versio, ['online', 'modified']) && isset($_GET["versio"])) { 
            http_response_code(400);
            echo "Versió no vàlida.";
            exit;
        }
        
        $modified_exist = BASE_PATH.'/modified/'.$file_php;
        $verify = $_GET["verificar"]?? false;

        if (!in_array($verify, ['true']) && isset($_GET["verificar"])) { 
            http_response_code(400);
            echo "Error 400 - Bad request";
            exit;
        }

        // triar la versió (online-modified)
        $admin_h1 = $uc_file_name." ".getLang($file);
        if ($versio!== 'online' && file_exists($modified_exist)) {
            $path_folder = 'modified';
            $admin_h2 = 'Modificada';
        } else {
            $path_folder = 'content';
            $admin_h2 = 'Online';
        }
        $admin_h1 = $admin_h1." - ".$admin_h2;

        require_once BASE_PATH.'/'.$path_folder.'/'.$file_php;
        require_once BASE_PATH.'/content/config/'.$file_name.'.php';

        // si estem verificant no podem editar
        $disabled_input = ($verify) ? 'disabled' : '';
        $action_file = ($verify) ? 'verificar' : 'guardar';
    
    } else {
        http_response_code(400);
        echo "Nombre de archivo inválido.";
        exit;
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

    <!-- WYSIWYG editor -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="/admin/summernote/summernote.min.css" rel="stylesheet">
    <script src="/admin/summernote/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('textarea').summernote({
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['view', ['codeview', 'help']]
                ]
            });
        });
    </script>
</head>
<body>
    <main>
        <section>
            <div class="container">
                <a class="admin-link link-goback" href="/admin">Torna a la pàgina principal</a>
                
                <div class="admin-title__container">
                    <h1 class="admin-title"><?=$admin_h1?></h1>

                    <?php if(!$verify) { ?>
                        <form method="get" name="versio" class="pill-form pill-form__small">
                            <input type="hidden" name="file" value="<?=$file?>">
                            <label for="versio" class="form__label">Modifica una versió:</label>
                            <select name="versio" class="form__input">
                                <option selected disabled>Tria una versió</option>
                                <option value="online">Online</option>
                                <? if (file_exists($modified_exist)) { ?>
                                <option value="modified">Modificada</option>
                                <? } ?>
                            </select>
                            <input type="submit" value="Canvia la versió">
                        </form>
                    <? } ?>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <form method="post" action="/admin/<?=$action_file?>.php" class="pill-form">
                    <input type="hidden" name="file" value="<?=$file?>">
                    <? foreach($variables as $nombre => $variable) { ?>
                        <div class="pill-form__item">
                            <?php if($verify) { ?>
                                <span class="pill-form__span"><?=$variable['label']?>:</span>
                                <div><?=$$nombre?></div>
                            <? } else { ?>
                                <label for="<?=$nombre?>"><?=$variable['label']?>:</label>
                                <? if($variable['tipo'] === 'texto') { ?>
                                    <input type="text" name="variables[<?=$nombre?>]" id="<?=$nombre?>" value="<?=$$nombre?>" <?=$disabled_input?>>
                                <? } elseif ($variable['tipo'] === 'textarea') { ?>
                                    <textarea name="variables[<?=$nombre?>]" id="<?=$nombre?>" rows="5" <?=$disabled_input?>><?=$$nombre?></textarea>
                                <? } elseif ($variable['tipo'] === 'image') { ?>
                                    <input type="file" name="variables[<?=$nombre?>]" id="<?=$nombre?>" accept="image/*" <?=$disabled_input ?>>
                                    <span>Imatge actual: <?=$$nombre?></span>
                                <? } elseif ($variable['tipo'] === 'boolean') { ?>
                                    <div class="radio-group">
                                        <label>
                                            <input type="radio" name="variables[<?=$nombre?>]" value="1" <?= ($$nombre == 1) ? 'checked' : '' ?> <?=$disabled_input?>>
                                            Si
                                        </label>
                                        <label>
                                            <input type="radio" name="variables[<?=$nombre?>]" value="0" <?= ($$nombre == 0) ? 'checked' : '' ?> <?=$disabled_input?>>
                                            No
                                        </label>
                                    </div>
                                <? } ?>
                            <? } ?>
                        </div>
                    <? } ?>
                    
                    <? if($verify) { ?>
                        <div class="pill-form__submit">
                            <a class="admin-link" href="/admin/editar.php?file=<?=$file?>&versio=modified">Editar</a>
                            <input type="submit" value="Verificar canvis" />    
                        </div>
                    <? } else { ?> 
                        <input type="submit" value="Guardar" />
                    <? } ?>
                </form>
            </div>
        </section>
    </main>
</body>
</html>