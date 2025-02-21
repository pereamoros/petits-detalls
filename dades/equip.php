<?php
    if($idioma == "cat") {
        include_once(BASE_PATH.'/content/ca_equip.php');
    } else if($idioma == "esp") {
        include_once(BASE_PATH.'/content/es_equip.php');
    }

    $equip = [
        [
            "name" => $member_1_name,
            "role" => $member_1_role,
            "img" => "/images/team/quico-germain-petits-detalls.webp"
        ],
        [
            "name" => $member_2_name,
            "role" => $member_2_role,
            "img" => "/images/team/maria-colom-petits-detalls.webp"
        ],
        [
            "name" => $member_3_name,
            "role" => $member_3_role,
            "img" => "/images/team/meritxell-prats-petits-detalls.webp"
        ],
        [
            "name" => $member_4_name,
            "role" => $member_4_role,
            "img" => "/images/team/baby-lucas-foundation-petits-detalls.webp"
        ],
        [
            "name" => $member_5_name,
            "role"=> $member_5_role,
            "img" => "/images/team/peca-women-and-children-petits-detalls.webp"
        ],
        [
            "name" => $member_6_name,
            "role" => $member_6_role,
            "img" => "/images/team/wipe-uganda-petits-detalls.webp"
        ],
        [
            "name"=> $member_7_name,
            "role"=> $member_7_role,
            "img"=> "/images/team/junta-directiva-petits-detalls.webp"
        ]
    ];

?>