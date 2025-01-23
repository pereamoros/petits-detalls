<?php
    if($idioma == "cat") {
        $content_h1 = "Smiles for the Future";
        $content_text = "<p>Smiles for the Future és un projecte que té com a objectiu principal garantir el Dret a l'educació inclusiva i de qualitat, desenvolupant de manera integral escoles públiques i comunitàries d'ensenyament primari a Iganga i Luuka, districtes rurals d'Uganda.</p>
        <p>El projecte va néixer a finals de 2015 i des dels seus inicis s'ha dedicat al desenvolupament d'escoles d'educació primària del districte de Luuka i a la promoció de l'educació. El projecte ha beneficiat a més de 3.500 persones cada any amb programes de promoció de l'educació, formació de professors, sensibilització comunitària i desenvolupament d'infraestructures. Fins al 2021 es va implementar una primera fase en els centres de Tabingwa, Kiroba, Namukubembe i Kamwirungu. El 2022 i 2023, es va implementar una segona fase del projecte en els centres de Buwasa, Kinawanswa, Butimbwa i Bugabula que ha beneficiat a més de 2.500 alumnes i alumnes i personal docent. Des de 2024 estem treballant a les escoles d'educació primària de Bishop Wills Demonstration i Bugomba, amb un total de 1.200 alumnes i alumnes i personal docent.</p>";
        $pilar_1 = "Promoció de l'educació";
        $pilar_2 = "Formació de professors";
        $pilar_3 = "Sensibilització comunitària";
        $pilar_4 = "Desenvolupament d'infraestructures";
    } else if($idioma == "esp") {
        $content_h1 = "Smiles for the Future";
        $content_text = "<p>Smiles for the Future es un proyecto que tiene como objetivo principal garantizar el Derecho a la educación inclusiva y de calidad, desarrollando de manera integral escuelas públicas y comunitarias de enseñanza primaria en Iganga y Luuka, distritos rurales de Uganda.</p>
        <p>El proyecto nació a finales de 2015 y desde sus inicios se ha dedicado al desarrollo de escuelas de educación primaria del distrito de Luuka y a la promoción de la educación. El proyecto ha beneficiado a más de 3.500 personas cada año con programas de promoción de la educación, formación de profesores, sensibilización comunitaria y desarrollo de infraestructuras. Hasta 2021 se implementó una primera fase en los centros de Tabingwa, Kiroba, Namukubembe y Kamwirungu. En 2022 y 2023, se implementó una segunda fase del proyecto en los centros de Buwasa, Kinawanswa, Butimbwa y Bugabula que ha beneficiado a más de 2.500 alumnos y alumnas y personal docente. Desde 2024 estamos trabajando en las escuelas de educación primaria de Bishop Wills Demonstration y Bugomba, con un total de 1.200 alumnos y alumnas y personal docente.</p>";
        $pilar_1 = "Promoción de la educación";
        $pilar_2 = "Formación de profesores";
        $pilar_3 = "Sensibilización comunitaria";
        $pilar_4 = "Desarrollo de infraestructuras";
    }

    
    $video_url = "/images/petits-detalls-hero.mp4";
    $video_img_url = "/images/projects/smiles-for-the-future-petits-detalls.webp";

    $gallery_segmented = [
        '/images/projects/smiles-for-the-future/smiles-for-the-future-africa-petits-detalls.webp',
        '/images/projects/smiles-for-the-future/smiles-for-the-future-petits-detalls.webp',
        '/images/projects/smiles-for-the-future/smiles-for-the-future-uganda-petits-detalls.webp',
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