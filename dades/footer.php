<?php
    if($idioma == "cat") {
        
        // constants
        $donacio_h2 = 'Pots fer una donació a:';
        $donacio_text = "Per més informació per col·laborar amb nosaltres:";
        $donacio_cta = "Col·labora";
        $footer_menu_title_2 = 'Comunitat';
        $footer_menu_title_3 = 'Segueix-nos';
        $avis_legal = '<a href="/avis-legal-politica-proteccio-dades">Avís legal i Política de protecció de dades</a>.';

    } else if($idioma == 'esp') {
        // constants
        $donacio_h2 = 'Puedes hacer una donación a:';
        $donacio_text = "Para más información para colaborar con nosotros:";
        $donacio_cta = "Colabora";
        $footer_menu_title_2 = 'Comunidad';
        $footer_menu_title_3 = 'Síguenos';
        $avis_legal = '<a href="/aviso-legal-politica-proteccion-datos">Aviso legal y Política de protección de datos</a>.';
    }

    $donacio_iban = '<b>ES98 2100 0423 9702 0037 2970</b> (La Caixa)';
    $donacio_bizum = 'BIZUM: <b>33591</b>';
    $footer_menu_title_1 = 'Petits Detalls';
    $footer_mail = 'info@petitsdetalls.org';
    $footer_nie = 'G66065715';
    
    $footer_menu_1 = [
        $menu_equip,
        $menu_projectes,
        $menu_mupenzi,
        $menu_smiles,
        $menu_gomesi,
        $menu_omukisa,
        $menu_abawala
    ];

    $footer_menu_2 = [
        $menu_soci,
        $menu_donacions,
        $menu_colaboracions,
        $menu_publicacions,
        $menu_blog,
        $menu_contacte
    ];


    $menu_social_facebook = [
        'url' => 'https://www.facebook.com/petits.detall/',
        'title' => $footer_menu_title_3.' a Facebook',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z" /></svg>'
    ];

    $menu_social_x = [
        'url' => 'https://x.com/petitsdetallsaf',
        'title' => $footer_menu_title_3.' a X',
        'svg' => '<svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l11.733 16h4.267l-11.733 -16z" /><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg>'
    ];

    $menu_social_instagram = [
        'url'=> 'https://www.instagram.com/petitsdetallsafrica/',
        'title'=> $footer_menu_title_3.' a Instagram',
        'svg' => '<svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 22 22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg>'
    ];

    $menu_social = [
        $menu_social_facebook,
        $menu_social_x,
        $menu_social_instagram
    ];
?>