<?php
    if($idioma == "cat") {
        include_once(BASE_PATH.'/content/ca_publicacions.php');
        // constants
        $idioma_json = "ca";
        $cta_veure = "Veure";
        $h2_pdf_viewer = "Selecciona un document del llistat";
        $text_pdf_viewer = "Per a llegir de manera online algun document, selecciona una publicació de les llistades més amunt.";
        $text_page = "Pàgina";
        $text_go_to_page = "Anar a la pàgina";
    } else if($idioma == "esp") {
        include_once(BASE_PATH.'/content/es_publicacions.php');
        // constants
        $cta_veure = "Ver";
        $idioma_json = "es";
        $h2_pdf_viewer = "Selecciona un documento del listado";
        $text_pdf_viewer = "Para leer de manera online algún documento, selecciona una publicación de las listadas más arriba.";
        $text_page = "Página";
        $text_go_to_page = "Ir a la página";
    }
?>