<?php
    if($idioma == "cat") {
        $content_h1 = "Omukisa";
        $content_text = "<p>Omukisa és un centre d'acollida temporal que neix per a garantir els drets bàsics i facilitar la reinserció social de menors que han viscut als carrers. El centre, totalment equipat, acull a un màxim de 27 nens i nenes d'edats diverses i es troba a Iganga, una de les ciutats amb un alt nombre de menors en aquesta situació de vulnerabilitat. El projecte va néixer el 2018, encara que el centre no va entrar en funcionament fins a l'any 2021 quan des de les oficines del govern local ens van cedir l'espai on es troba avui Omukisa. En aquests últims tres anys, el projecte s'ha consolidat i avui dia tots els seus programes estan en funcionament.</p>";
        $pilar_1 = "Drets bàsics:<br/> llar, alimentació i sanitat";
        $pilar_2 = "Educació formal, educació adaptada i formació en habilitats";
        $pilar_3 = "Acompanyament psicològic";
        $pilar_4 = "Educació no formal i esports";
    } else if($idioma == "esp") {
        $content_h1 = "Omukisa";
        $content_text = "<p>Omukisa es un centro de acogida temporal que nace para garantizar los derechos básicos y facilitar la reinserción social de menores que han vivido en las calles. El centro, totalmente equipado, acoge a un máximo de 27 niños y niñas de edades diversas y se encuentra en Iganga, una de las ciudades con un alto número de menores en esta situación de vulnerabilidad. El proyecto nació en 2018, aunque el centro no entró en funcionamiento hasta el año 2021 cuando desde las oficinas del gobierno local nos cedieron el espacio dónde se encuentra hoy Omukisa. En estos últimos tres años, el proyecto se ha consolidado y a día de hoy todos sus programas están en funcionamiento.</p>";
        $pilar_1 = "Derechos básicos:<br/> hogar, alimentación y sanidad";
        $pilar_2 = "Educación formal, educación adaptada y formación en habilidades";
        $pilar_3 = "Acompañamiento psicológico";
        $pilar_4 = "Educación no formal y deportes";
    }

    
    $video_url = "/images/petits-detalls-hero.mp4";
    $video_img_url = "/images/projects/omukisa-petits-detalls.webp";

    $gallery_segmented = [
        '/images/projects/omukisa/omukisa-petits-detalls.webp',
        '/images/projects/omukisa/omukisa-children-petits-detalls.webp',
        '/images/projects/omukisa/omukisa-educacio-petits-detalls.webp',
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
            'svg'=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"  ><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>'
        ]
    ];

    
?>