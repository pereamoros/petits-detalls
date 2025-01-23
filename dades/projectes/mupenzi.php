<?php
    if($idioma == "cat") {
        $content_h1 = "Mupenzi";
        $content_text = "<p><b>Mupenzi</b> (“aquell que estima” en suajili) és un projecte d'ajuda integral a nens i nenes orfes en situació d'extrema vulnerabilitat i risc d'exclusió social. El projecte ofereix una llar, alimentació, atenció sanitària, la millor educació possible i una família a tots els menors que viuen en el centre.</p>
        <p>Aquest projecte, que va néixer a finals de l'any 2014, va ser la raó per la qual va començar <b>Petits Detalls</b>, amb l'objectiu d'oferir atenció integral a tots els nens i nenes de l'orfenat Mupenzi. Des de l'arribada de la oenegé, la realitat dels menors que formen part de l'orfenat ha canviat radicalment. Abans de Petits Detalls, els nens i nenes no anaven a l'escola amb regularitat, no tenien accés a un sistema sanitari, s'alimentaven tan sols una vegada al dia i passaven els seus dies en una casa en ruïnes, en la qual no tenien accés ni a aigua ni a electricitat. En 2017 va ser el primer any en què es van poder implementar íntegrament tots els programes dissenyats en l'inici del projecte. Aquests se centren en <b>proporcionar una educació i una sanitat completes</b> i de qualitat, alimentació, habitatge i, en definitiva, <b>fer de Mupenzi una llar i una família</b>.</p>
        <p>Des de l'any 2017 s'implementen accions d'ajuda a la comunitat amb la finalitat d'impulsar un desenvolupament més holístic i estructural, raó per la qual s'implementen accions d'ajuda a la infància a través de les beques escolars, la música i l'esport.</p>
        <p>En l'actualitat s'està complementant la feina amb accions de reunificació familiar i comunitària que permeti als nens i nenes que ajudem conèixer la seva comunitat d'origen i els seus familiars, amb la finalitat de donar-los més eines per al futur.</p>";
        $pilar_1 = "Drets bàsics:<br/> llar, alimentació i sanitat";
        $pilar_2 = "Educació formal i no formal";
        $pilar_3 = "Reunificació familiar i comunitària";

    } else if($idioma == "esp") {
        $content_h1 = "Mupenzi";
        $content_text = "<p><b>Mupenzi</b> (“aquel que ama” en suajili) es un proyecto de ayuda integral a niños y niñas huérfanos en situación de extrema vulnerabilidad y riesgo de exclusión social. El proyecto ofrece un hogar, alimentación, atención sanitaria, la mejor educación posible y una familia a todos los menores que viven en el centro.</p>
        <p>Este proyecto, que nació a finales del año 2014, fue la razón por la que comenzó <b>Petits Detalls</b>, con el objetivo de ofrecer atención integral a todos los niños y niñas del orfanato Mupenzi. Desde la llegada de la ong, la realidad de los menores que forman parte del orfanato ha cambiado radicalmente. Antes de Petits Detalls, los niños y niñas no iban al colegio con regularidad, no tenían acceso a un sistema sanitario, se alimentaban tan solo una vez al día y pasaban sus días en una casa en ruinas, en la que no tenían acceso ni a agua ni a electricidad. En 2017 fue el primer año en el que se pudieron implementar íntegramente todos los programas diseñados en el inicio del proyecto. Estos se centran en <b>proporcionar una educación y una sanidad completas</b> y de calidad, alimentación, vivienda y, en definitiva, <b>hacer de Mupenzi un hogar y una familia</b>.</p>
        <p>Desde el año 2017 se implementan acciones de ayuda a la comunidad con la finalidad de impulsar un desarrollo más holístico y estructural, razón por la cual se implementan acciones de ayuda a la infancia a través de las becas escolares, la música y el deporte.</p>
        <p>En la actualidad se está complementando el trabajo con acciones de reunificación familiar y comunitaria que permita a los niños y niñas que ayudamos conocer su comunidad de origen y sus familiares, con la finalidad de darles más herramientas para el futuro.</p>";
        $pilar_1 = "Derechos básicos:<br/> hogar, alimentación y sanidad";
        $pilar_2 = "Educación formal y no formal";
        $pilar_3 = "Reunificación familiar y comunitaria";

    }

       

    $video_url = "/images/petits-detalls-hero.mp4";
    $video_img_url = "/images/petits-detalls-hero.webp";

    $gallery_segmented = [
        '/images/slider-home/petits-detalls-women.webp',
        '/images/slider-home/petits-detalls-home.webp',
        '/images/slider-home/petits-detalls-hero.webp',
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
        ]
    ];

    
?>