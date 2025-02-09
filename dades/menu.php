<?php
    if($idioma == "cat") {
        $menu_equip_name = 'Equip';
        $menu_equip_title = 'Equip de treball de Petits Detalls';
        $menu_equip_url = '/equip';
        $menu_projectes_name = 'Projectes';
        $menu_projectes_title = 'Projectes de Petits Detalls';
        $menu_projectes_url = '/projectes';
        $menu_colabora_name = 'Col·labora';
        $menu_colabora_title = 'Col·labora amb Petits Detalls';
        $menu_colabora_url = '/collabora';
        $menu_publicacions_name = 'Publicacions';
        $menu_publicacions_title = 'Publicacions de Petits Detalls';
        $menu_publicacions_url = '/publicacions';
        $menu_blog_name = 'Blog';
        $menu_blog_title = 'Blog de Petits Detalls';
        $menu_blog_url = '/blog';
        $menu_contacte_name = 'Contacte';
        $menu_contacte_title = 'Contacta amb Petits Detalls';
        $menu_contacte_url = '/contacte';
        // Projectes individuals
        $menu_mupenzi_name = 'Mupenzi';
        $menu_mupenzi_title = 'Projecte Mupenzi de Petits Detalls';
        $menu_mupenzi_url = '/mupenzi';
        $menu_smiles_name = 'Smiles for the Future';
        $menu_smiles_title = 'Projecte Smiles for the Future de Petits Detalls';
        $menu_smiles_url = '/smiles-for-the-future';
        $menu_gomesi_name = 'Gomesi';
        $menu_gomesi_title = 'Projecte Gomesi de Petits Detalls';
        $menu_gomesi_url = '/gomesi';
        $menu_omukisa_name = 'Omukisa';
        $menu_omukisa_title = 'Projecte Omukisa de Petits Detalls';
        $menu_omukisa_url = '/omukisa';
        $menu_abawala_name = 'Abawala';
        $menu_abawala_title = 'Projecte Abawala de Petits Detalls';
        $menu_abawala_url = '/abawala';
        // Col·labora
        $menu_soci_name = 'Fes-te soci';
        $menu_soci_title = 'Fes-te soci de Petits Detalls';
        $menu_soci_url = '/fes-te-soci';
        $menu_donacions_name = 'Donacions puntuals';
        $menu_donacions_title = 'Donacions puntuals a Petits Detalls';
        $menu_donacions_url = LINK_DONACIONS;
        $menu_colaboracions_name = 'Col·laboracions';
        $menu_colaboracions_title = 'Col·laboracions amb Petits Detalls';
        $menu_colaboracions_url = '/collaboracions';

    } else if($idioma == 'esp') {
        // menu principal
        $menu_equip_name = 'Equipo';
        $menu_equip_title = 'Equipo de trabajo de Petits Detalls';
        $menu_equip_url = '/equipo';
        $menu_projectes_name = 'Proyectos';
        $menu_projectes_title = 'Proyectos de Petits Detalls';
        $menu_projectes_url = '/proyectos';
        $menu_colabora_name = 'Colabora';
        $menu_colabora_title = 'Colabora con Petits Detalls';
        $menu_colabora_url = '/colabora';
        $menu_publicacions_name = 'Publicaciones';
        $menu_publicacions_title = 'Publicaciones de Petits Detalls';
        $menu_publicacions_url = '/publicaciones';
        $menu_blog_name = 'Blog';
        $menu_blog_title = 'Blog de Petits Detalls';
        $menu_blog_url = '/blog-es';
        $menu_contacte_name = 'Contacto';
        $menu_contacte_title = 'Contacta con Petits Detalls';
        $menu_contacte_url = '/contacto';
        // Projectes individuals
        $menu_mupenzi_name = 'Mupenzi';
        $menu_mupenzi_title = 'Proyecto Mupenzi de Petits Detalls';
        $menu_mupenzi_url = '/mupenzi-es';
        $menu_smiles_name = 'Smiles for the Future';
        $menu_smiles_title = 'Proyecto Smiles for the Future de Petits Detalls';
        $menu_smiles_url = '/smiles-for-the-future-es';
        $menu_gomesi_name = 'Gomesi';
        $menu_gomesi_title = 'Proyecto Gomesi de Petits Detalls';
        $menu_gomesi_url = '/gomesi-es';
        $menu_omukisa_name = 'Omukisa';
        $menu_omukisa_title = 'Proyecto Omukisa de Petits Detalls';
        $menu_omukisa_url = '/omukisa-es';
        $menu_abawala_name = 'Abawala';
        $menu_abawala_title = 'Proyecto Abawala de Petits Detalls';
        $menu_abawala_url = '/abawala-es';
        // Col·labora
        $menu_soci_name = 'Hazte socio';
        $menu_soci_title = 'Hazte socio de Petits Detalls';
        $menu_soci_url = '/hazte-socio';
        $menu_donacions_name = 'Donaciones puntuales';
        $menu_donacions_title = 'Donaciones puntuales a Petits Detalls';
        $menu_donacions_url = LINK_DONACIONS;
        $menu_colaboracions_name = 'Colaboraciones';
        $menu_colaboracions_title = 'Colaboraciones con Petits Detalls';
        $menu_colaboracions_url = '/colaboraciones';
    }

    $menu_equip = [
        'name' => $menu_equip_name,
        'title' => $menu_equip_title,
        'url' => $menu_equip_url
    ];
    $menu_projectes = [
        'name' => $menu_projectes_name,
        'title' => $menu_projectes_title,
        'url' => $menu_projectes_url
    ];
    $menu_colabora = [
        'name' => $menu_colabora_name,
        'title' => $menu_colabora_title,
        'url' => $menu_colabora_url
    ];
    $menu_publicacions = [
        'name' => $menu_publicacions_name,
        'title' => $menu_publicacions_title,
        'url' => $menu_publicacions_url
    ];
    $menu_blog = [
        'name' => $menu_blog_name,
        'title' => $menu_blog_title,
        'url' => $menu_blog_url
    ];
    $menu_contacte = [
        'name' => $menu_contacte_name,
        'title' => $menu_contacte_title,
        'url' => $menu_contacte_url
    ];

    $menu = [
        $menu_equip,
        $menu_projectes,
        $menu_colabora,
        $menu_publicacions,
        $menu_blog,
        $menu_contacte
    ];
    // Projectes individuals
    $menu_mupenzi = [
        'name' => $menu_mupenzi_name,
        'title' => $menu_mupenzi_title,
        'url' => $menu_mupenzi_url
    ];
    $menu_smiles = [
        'name' => $menu_smiles_name,
        'title' => $menu_smiles_title,
        'url' => $menu_smiles_url
    ];
    $menu_gomesi = [
        'name' => $menu_gomesi_name,
        'title' => $menu_gomesi_title,
        'url' => $menu_gomesi_url
    ];
    $menu_omukisa = [
        'name' => $menu_omukisa_name,
        'title' => $menu_omukisa_title,
        'url' => $menu_omukisa_url
    ];
    $menu_abawala = [
        'name' => $menu_abawala_name,
        'title' => $menu_abawala_title,
        'url' => $menu_abawala_url
    ];
    // Comunitat
    $menu_soci = [
        'name' => $menu_soci_name,
        'title' => $menu_soci_title,
        'url' => $menu_soci_url
    ];
    $menu_donacions = [
        'name' => $menu_donacions_name,
        'title' => $menu_donacions_title,
        'url' => $menu_donacions_url
    ];
    $menu_colaboracions = [
        'name' => $menu_colaboracions_name,
        'title' => $menu_colaboracions_title,
        'url' => $menu_colaboracions_url
    ];

    $languages = [
        [
            'name' => 'Català',
            'codi' => 'ca'
        ],
        [
            'name' => 'Español',
            'codi' => 'es'
        ]
    ];

?>