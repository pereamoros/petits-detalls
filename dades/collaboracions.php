<?php
    if($idioma == "cat") {
        include_once(BASE_PATH.'/content/ca_collaboracions.php');
        // constants
        $form_name = "Nom i Cognoms";
        $form_email = "Correu electrònic";
        $form_telefon = "Telèfon";
        $form_missatge = "Missatge";
        $form_accept_pp = '* He llegit i accepto la <a href="/avis-legal-politica-proteccio-dades" target="_blank">política de privacitat</a> de Petits Detalls';
        $form_news = "Vull rebre notícies sobre els projectes de Petits Detalls";
        $form_send = "Enviar";

    } else if($idioma == "esp") {
        include_once(BASE_PATH.'/content/es_collaboracions.php');
        // constants
        $form_name = "Nombre y Apellidos";
        $form_email = "Correo electrónico";
        $form_telefon = "Teléfono";
        $form_missatge = "Mensaje";
        $form_accept_pp = '* He leído y acepto la <a href="/aviso-legal-politica-proteccion-datos" target="_blank">política de privacidad</a> de Petits Detalls';
        $form_news = "Quiero recibir noticias sobre los proyectos de Petits Detalls";
        $form_send = "Enviar";
    }
?>