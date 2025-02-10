<?php
    if($idioma == "cat") {
        $content_h1 = "Projectes";
        $mupenzi_desc = "Projecte de protecció infantil i ajuda a la infància vulnerable";
        $smiles_desc = "Projecte d'educació, protecció infantil i salut sexual i reproductiva.";
        $gomesi_desc = "Projecte per a l'empoderament socio-econòmic de la dona rural.";
        $omukisa_desc = "Projecte per garantir els drets de menors que han viscut al carrers i la seva reinserció social.";
        $abawala_desc = "Projectes d'ajuda a mares adolescents, protecció infantil, educació i salut sexual i reproductiva.";
        // constants
        $btn_text = "Veure més";
    } else if($idioma == "esp") {
        $content_h1 = "Proyectos";
        $mupenzi_desc = "Proyecto de protección infantil y ayuda a la infancia vulnerable";
        $smiles_desc = "Proyecto de educación, protección infantil y salud sexual y reproductiva.";
        $gomesi_desc = "Proyecto para el empoderamiento socio-económico de la mujer rural.";
        $omukisa_desc = "Proyecto para garantizar los derechos de menores que han vivido en la calle y su reinserción social.";
        $abawala_desc = "Proyectos de ayuda a madres adolescentes, protección infantil, educación y salud sexual y reproductiva.";
        // constants
        $btn_text = "Ver más";
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