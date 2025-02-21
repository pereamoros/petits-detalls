<?php
    if($idioma == "cat") {
        include_once(BASE_PATH.'/content/ca_projectes.php');
    } else if($idioma == "esp") {
        include_once(BASE_PATH.'/content/es_projectes.php');
    }

    $projectes = [
        [
            "name"=> $menu_mupenzi_name,
            "description" => $mupenzi_desc, 
            "img" => "/images/projects/projecte-mupenzi-petits-detalls.webp",
            "url" => $menu_mupenzi_url,
            "lat" => 0.3,
            "lng" => 33.1
        ],
        [
            "name"=> $menu_smiles_name,
            "description" => $smiles_desc,
            "img" => "/images/projects/smiles-for-the-future-petits-detalls.webp",
            "url" => $menu_smiles_url,
            "lat" => 0.5,
            "lng" => 33.4
        ],
        [
            "name"=> $menu_gomesi_name,
            "description" => $gomesi_desc,
            "img" => "/images/projects/gomesi-petits-detalls.webp",
            "url" => $menu_gomesi_url,
            "lat" => 0.7,
            "lng" => 33.3
        ],
        [
            "name"=> $menu_omukisa_name,
            "description" => $omukisa_desc,
            "img" => "/images/projects/omukisa-petits-detalls.webp",
            "url" => $menu_omukisa_url,
            "lat" => 0.6,
            "lng" => 33.0
        ],
        [
            "name"=> $menu_abawala_name,
            "description" => $abawala_desc,
            "img" => "/images/projects/abawala-petits-detalls.webp",
            "url" => $menu_abawala_url,
            "lat" => 0.45,
            "lng" => 33.5
        ],
    ]
?>