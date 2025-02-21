<?php
    if($idioma == "cat") {
        include_once(BASE_PATH.'/content/ca_collabora.php');
    } else if($idioma == "esp") {
        include_once(BASE_PATH.'/content/es_collabora.php');
    }

    $socis = [
        'h2' => $socis_h2,
        'text' => $socis_text,
        'cta-text' => $socis_cta,
        'cta-link' => $menu_soci_url,
        'cta-class' => 'cta--c1'
    ];

    $donacions = [
        'h2' => $donacions_h2,
        'text' => $donacions_text,
        'cta-text' => $donacions_cta,
        'cta-link' => $menu_donacions_url,
        'cta-class' => 'cta--cw'
    ];

    $colaboracions = [
        'h2' => $colaboracions_h2,
        'text' => $colaboracions_text,
        'cta-text' => $colaboracions_cta,
        'cta-link' => $menu_colaboracions_url,
        'cta-class' => 'cta--cw'
    ];

    $colabora_flex = [
        $socis,
        $donacions,
        $colaboracions
    ];
?>