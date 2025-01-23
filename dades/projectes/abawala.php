<?php
    if($idioma == "cat") {
        $content_h1 = "Abawala";
        $content_text = "<p>Abawala significa “nenes” i es tracta d'un projecte  que té per objectiu promoure l'efectiu compliment dels drets humans de nenes i mares joves mitjançant l'impuls dels seus mitjans de vida i la sensibilització comunitària per a la prevenció de la violència i els embarassos adolescents.</p>
        <p>El projecte es va iniciar el 2022 als districtes de Luuka i Jinja beneficiant a 6 cooperatives de 30 mares cadascuna, a més de 1.000 alumnes i alumnes d'escoles primàries locals gràcies a la realització de xerrades i tallers educatius amb l'objectiu de prevenir embarassos adolescents i casos de violència sexual. Encara que la primera fase del projecte va finalitzar al novembre de 2023, des de Petits Detalls ens hem compromès a continuar donant suport a aquestes cooperatives per a garantir la seva sostenibilitat i actualment el projecte s'implementa al districte de Luuka.</p>";
        $pilar_1 = "Formació en habilitats i financera";
        $pilar_2 = "Educació en drets";
        $pilar_3 = "Sensibilització comunitària";
    } else if($idioma == "esp") {
        $content_h1 = "Abawala";
        $content_text = "<p>Abawala significa “niñas” y se trata de un proyecto cuyo objetivo es promover el efectivo cumplimiento de los derechos humanos de niñas y madres jóvenes mediante el impulso de sus medios de vida y la sensibilización comunitaria para la prevención de la violencia y los embarazos adolescentes.</p>
        <p>El proyecto se inició en 2022 en los distritos de Luuka y Jinja beneficiando a 6 cooperativas de 30 madres cada una, además de 1.000 alumnos y alumnas de escuelas primarias locales gracias a la realización de charlas y talleres educativos con el objetivo de prevenir embarazos adolescentes y casos de violencia sexual. Aunque la primera fase del proyecto finalizó en noviembre de 2023, desde Petits Detalls nos hemos comprometido a seguir apoyando estas cooperativas para garantizar su sostenibilidad y actualmente el proyecto se implementa en el distrito de Luuka.</p>";
        $pilar_1 = "Formación en habilidades y financiera";
        $pilar_2 = "Educación en derechos";
        $pilar_3 = "Sensibilización comunitaria";
    }

    
    $video_url = "/images/petits-detalls-hero.mp4";
    $video_img_url = "/images/projects/abawala-petits-detalls.webp";

    $gallery_segmented = [
        '/images/projects/abawala/abawala-petits-detalls.webp',
        '/images/projects/abawala/abawala-women-petits-detalls.webp',
        '/images/projects/abawala/abawala-future-female-petits-detalls.webp',
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