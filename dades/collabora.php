<?php
    if($idioma == "cat") {
        $content_h1 = "Col·labora";
        
        $socis_h2 = "Socis/es";
        $socis_text = "<p>Fes-te soci/sòcia de Petits Detalls i col·labora periòdicament amb els nostres projectes.</p>";
        $socis_cta = "Fes-te Soci";

        $donacions_h2 = "Donacions puntuals";
        $donacions_text = "<p>Fes una donació puntual a Petits Detalls i col·labora amb els nostres projectes.</p>";
        $donacions_cta = "Col·labora";

        $colaboracions_h2 = "Col·laboracions";
        $colaboracions_text = "<p>Et cases i has pensat en fer un obsequi de boda solidari? Vols fer una donació per celebrar la teva comunió? Sou un centre amb ganes de participar en un projecte solidari a l'Àfrica?</p>
        <p>Doncs aquest espai és per tu! Escriu-nos amb la teva proposta solidària i plegats ho farem possible!</p>";
        $colaboracions_cta = "Escriu-nos!";

        $colabora_text_final = "Totes les teves aportacions a Petits Detalls tenen beneficis fiscals. Per cada donació fins a 250€, et podràs desgravar fins a un 80%. Per les donacions superiors a 250€, un 40% o un 45% si durant els dos anys anteriors has realitzat donat una quantitat igual o superior.";

        // constants
    } else if($idioma == "esp") {
        $content_h1 = "Colabora";

        $socis_h2 = "Socios/as";
        $socis_text = "<p>Hazte socio/socia de Petits Detalls y colabora periódicamente con nuestros proyectos.</p>";
        $socis_cta = "Hazte Socio";

        $donacions_h2 = "Donaciones puntuales";
        $donacions_text = "<p>Haz una donación puntual a Petits Detalls y colabora con nuestros proyectos.</p>";
        $donacions_cta = "Colabora";

        $colaboracions_h2 = "Colaboraciones";
        $colaboracions_text = "<p>¿Te casas y has pensado en hacer un obsequio de boda solidario? ¿Quieres hacer una donación para celebrar tu comunión? ¿Sois un centro con ganas de participar en un proyecto solidario en África?</p>
        <p>¡Pues este espacio es para ti! ¡Escríbenos con tu propuesta solidaria y juntos lo haremos posible!</p>";
        $colaboracions_cta = "¡Escríbenos!";

        $colabora_text_final = "Todas tus aportaciones a Petits Detalls tienen beneficios fiscales. Por cada donación hasta 250€, podrás desgravarte hasta un 80%. Por las donaciones superiores a 250€, un 40% o un 45% si durante los dos años anteriores has donado una cantidad igual o superior.";
        
        // constants
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
        $donacions
    ];

    
    
?>