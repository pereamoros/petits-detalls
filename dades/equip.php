<?php
    if($idioma == "cat") {
        $content_h1 = "Equip";
        $member_1_role = "Responsable d'aliances estratègiques";
        $member_2_role = "Tècnica de projectes";
        $member_3_role = "Tècnica de projectes";
        $member_4_role = "Projecte Mupenzi.<br/>Àrees de protecció infantil i atenció a menors en situació de vulnerabilitat.";
        $member_5_role = "Projecte Smiles for the Future, Abawala i Omukisa.<br/>Àrees de protecció infantil, educació i salut sexual i reproductiva.";
        $member_6_role = "Projecte Gomesi i Abawala.<br/>Àrees d'empoderament de la dona i igualtat de gènere.";
        $member_7_role = "Órgan de govern de l'associació.";
        $team_contact_text = "Vols contactar amb algun dels membres de l'equip?<br/>Escriu-nos a <b>info@petitsdetalls.org</b>";
    } else if($idioma == "esp") {
        $content_h1 = "Equipo";
        $member_1_role = "Responsable de alianzas estratégicas";
        $member_2_role = "Técnica de proyectos";
        $member_3_role = "Técnica de proyectos";
        $member_4_role = "Proyecto Mupenzi.<br/>Áreas de protección infantil y atención a menores en situación de vulnerabilidad.";
        $member_5_role = "Proyecto Smiles for the Future, Abawala y Omukisa.<br/>Áreas de protección infantil, educación y salud sexual y reproductiva.";
        $member_6_role = "Proyecto Gomesi y Abawala.<br/>Áreas de empoderamiento de la mujer e igualdad de género.";
        $member_7_role = "Órgano de gobierno de la asociación.";
        $team_contact_text = "¿Quieres contactar con alguno de los miembros del equipo?<br/>Escríbenos a <b>info@petitsdetalls.org</b>";
    }

    $equip = [
        [
            "name" => "Quico Germain",
            "role" => $member_1_role,
            "img" => "/images/team/quico-germain-petits-detalls.webp"
        ],
        [
            "name" => "Maria Colom",
            "role" => $member_2_role,
            "img" => "/images/team/maria-colom-petits-detalls.webp"
        ],
        [
            "name" => "Meritxell Prats",
            "role" => $member_3_role,
            "img" => "/images/team/meritxell-prats-petits-detalls.webp"
        ],
        [
            "name" => "Baby Lucas Foundation",
            "role" => $member_4_role,
            "img" => "/images/team/baby-lucas-foundation-petits-detalls.webp"
        ],
        [
            "name" => "PECA Women and Children's",
            "role"=> $member_5_role,
            "img" => "/images/team/peca-women-and-children-petits-detalls.webp"
        ],
        [
            "name" => "WIPE-Uganda",
            "role" => $member_6_role,
            "img" => "/images/team/wipe-uganda-petits-detalls.webp"
        ],
        [
            "name"=> "Junta Directiva",
            "role"=> $member_7_role,
            "img"=> "/images/team/junta-directiva-petits-detalls.webp"
        ]
    ];

?>