<?php
    if($idioma == "cat") {
        $content_h1 = "Gomesi";
        $content_text = "<p>Gomesi és un projecte de desenvolupament comunitari en zones rurals ugandeses que neix amb l’objectiu de promoure l’empoderament de la dona i reduir les desigualtats de gènere entre les comunitats rurals de l’est del país. Per tal d’aconseguir-ho, el projecte compta amb programes de formació en habilitats i tallers d’alfabetització financera dirigits a les dones rurals, i programes de sensibilització comunitària per tal de conscienciar la comunitat sobre els Drets Humans, amb especial atenció a problemàtiques existents a la zona com la violència de gènere o el matrimoni infantil. A través de Gomesi també organitzem activitats amb els i les líders locals i tallers de sensibilització dirigits als homes de la comunitat com a aliats en la lluita per eradicar les desigualtats de gènere i la violència cap a les dones.</p>";
        $pilar_1 = "Formació financera";
        $pilar_2 = "Formació en habilitats";
        $pilar_3 = "Sensibilització";
        $pilar_4 = "Enfortiment d'instàncies locals";
    } else if($idioma == "esp") {
        $content_h1 = "Gomesi";
        $content_text = "<p>Gomesi es un proyecto de desarrollo comunitario en zonas rurales ugandesas que nace con el objetivo de promover el empoderamiento de la mujer y reducir las desigualdades de género entre las comunidades rurales del este del país. Para conseguirlo, el proyecto cuenta con programas de formación en habilidades y talleres de alfabetización financiera dirigidos a las mujeres rurales, y programas de sensibilización comunitaria para concienciar la comunidad sobre los Derechos Humanos, con especial atención a problemáticas existentes en la zona como la violencia de género o el matrimonio infantil. A través de Gomesi también organizamos actividades con los y las líderes locales y talleres de sensibilización dirigidos a los hombres de la comunidad como aliados en la lucha para erradicar las desigualdades de género y la violencia hacia las mujeres.</p>";
        $pilar_1 = "Formación financiera";
        $pilar_2 = "Formación en habilidades";
        $pilar_3 = "Sensibilización";
        $pilar_4 = "Fortalecimiento de instancias locales";
    }

    
    $video_url = "/images/petits-detalls-hero.mp4";
    $video_img_url = "/images/projects/gomesi-africa-petits-detalls.webp";

    $gallery_segmented = [
        '/images/projects/gomesi/gomesi-petits-detalls.webp',
        '/images/projects/gomesi/gomesi-dona-rural-petits-detalls.webp',
        '/images/projects/gomesi/gomesi-empoderament-petits-detalls.webp',
        $video_img_url
    ];

    $pilars = [
        [
            'h3'=> $pilar_1,
            'svg'=> '<svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>'
        ],
        [
            'h3'=> $pilar_2,
            'svg'=> '<svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"  stroke-linejoin="round"><path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" /><path d="M14.5 5.5l4 4" /><path d="M12 8l-5 -5l-4 4l5 5" /><path d="M7 8l-1.5 1.5" /><path d="M16 12l5 5l-4 4l-5 -5" /><path d="M16 17l-1.5 1.5" /></svg>'
        ],
        [
            'h3'=> $pilar_3,
            'svg'=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"  ><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>'
        ],
        [
            'h3'=> $pilar_4,
            'svg'=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"  ><path d="M12 2l-2 2l2 2m0 16l2 -2l-2 -2" /><path d="M4 6h16v12h-16z" /></svg>'
        ]
    ];

    
?>