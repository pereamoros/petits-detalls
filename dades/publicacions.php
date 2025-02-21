<?php
    if($idioma == "cat") {
        $content_h1 = "Publicacions";
        $t_info_1 = "<b>Si vols saber més dels nostres projectes o tens alguna proposta que creus que ens pot ajudar, no dubtis en escriure'ns!</b>";
        $t_info_2 = "Recorda que Petits Detalls no acull voluntaris/es a Uganda, però si el que vols és ajudar, no importa a on! A Espanya també tenim una xarxa de col·laboradors i col·laboradores que participen als nostres projectes de formes ben diferents.";

        $memoria_2024_title = "Memòria 2024";
        $memoria_2024_desc = "Memòria Anual de Petits Detalls 2024.";
        $memoria_2024_pdf = "/src/publicacions/memoria-2016.pdf";

        $memoria_2023_title = "Memòria 2023";
        $memoria_2023_desc = "Memèria Anual de Petits Detalls 2023.";
        $memoria_2023_pdf = "/src/publicacions/memoria-2016.pdf";

        // constants
        $cta_veure = "Veure";
        $cta_descarga = "Descarregar";
    } else if($idioma == "esp") {
        $content_h1 = "Publicaciones";
        $t_info_1 = "<b>Si quieres saber más de nuestros proyectos o tienes alguna propuesta que creas que nos puede ayudar, ¡no dudes en escribirnos!</b>";
        $t_info_2 = "Recuerda que Petits Detalls no acoge voluntarios/as en Uganda, pero si lo que quieres es ayudar, ¡no importa dónde! En España también tenemos una red de colaboradores y colaboradoras que participan en nuestros proyectos de formas muy diferentes.";

        $memoria_2024_title = "Memoria 2024";
        $memoria_2024_desc = "Memoria Anual de Petits Detalls 2024.";
        $memoria_2024_pdf = "/src/publicacions/memoria-2016.pdf";

        $memoria_2023_title = "Memoria 2023";
        $memoria_2023_desc = "Memòria Anual de Petits Detalls 2023.";
        $memoria_2023_pdf = "/src/publicacions/memoria-2016.pdf";

        
        // constants
        $cta_veure = "Ver";
        $cta_descarga = "Descargar";
    }

    $memoria_2024 = [
        "title" => $memoria_2024_title,
        "desc" => $memoria_2024_desc,
        "pdf" => $memoria_2024_pdf
    ];

    $memoria_2023 = [
        "title" => $memoria_2023_title,
        "desc" => $memoria_2023_desc,
        "pdf" => $memoria_2023_pdf
    ];

    $publicacions = [
        $memoria_2023,
        $memoria_2024
    ];

    
    
?>