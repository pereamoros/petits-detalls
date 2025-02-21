<?php
    if($idioma == "cat") {
        include_once(BASE_PATH.'/content/ca_home.php');
    } else if($idioma == "esp") {
        include_once(BASE_PATH.'/content/es_home.php');
    }

    $missio_visio = [
        [
            'h3' => $missio_h3,
            'text' => $missio_text
        ],
        [
            'h3' => $visio_h3,
            'text' => $visio_text
        ]
    ];

    $allo_que_ens_mou = [
        [
            'h3' => $lideratge_h3,
            'text' => $lideratge_text,
            'svg' => '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"  stroke-linejoin="round"><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>'
        ],
        [
            'h3' => $cooperacio_h3,
            'text' => $cooperacio_text,
            'svg' => '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>'
        ],
        [
            'h3' => $conscienciacio_h3,
            'text' => $conscienciacio_text,
            'svg' => '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 8a5 5 0 0 1 0 8" /><path d="M17.7 5a9 9 0 0 1 0 14" /><path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" /></svg>'
        ],
        [
            'h3' => $feminisme_h3,
            'text' => $feminisme_text,
            'svg' => '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 7l-18 0" /><path d="M18 10l3 -3l-3 -3" /><path d="M6 20l-3 -3l3 -3" /><path d="M3 17l18 0" /></svg>'
        ],
        [
            'h3' => $sostenibilitat_h3,
            'text' => $sostenibilitat_text,
            'svg' => '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chart-pie"><path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-6.8a2 2 0 0 1 -2 -2v-7a.9 .9 0 0 0 -1 -.8" /><path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a1 1 0 0 1 -1 -1v-4.5" /></svg>'
        ],
        [
            'h3' => $justicia_h3,
            'text' => $justicia_text,
            'svg' => '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M7 20l10 0" /><path d="M6 6l6 -1l6 1" /><path d="M12 3l0 17" /><path d="M9 12l-3 -6l-3 6a3 3 0 0 0 6 0" /><path d="M21 12l-3 -6l-3 6a3 3 0 0 0 6 0" /></svg>'
        ]
    ];

    $impacte = [
        [
            'h3'=> $projectes_h3,
            'num'=> '5'
        ],
        [
            'h3'=> $persones_h3,
            'num'=> '16.100'
        ],
        [
            'h3'=> $socies_h3,
            'num'=> '102'
        ]
    ];

    
?>