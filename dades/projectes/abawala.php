<?php
    if($idioma == "cat") {
        include_once(BASE_PATH.'/content/ca_abawala.php');
    } else if($idioma == "esp") {
        include_once(BASE_PATH.'/content/es_abawala.php');
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