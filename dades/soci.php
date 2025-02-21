<?php
    if($idioma == "cat") {
        include_once(BASE_PATH.'/content/ca_soci.php');        
        // constants
        $form_name = "Nom i Cognoms";
        $form_dni = "DNI";
        $form_email = "Correu electrònic";
        $form_telefon = "Telèfon";
        $form_direccio = "Direcció";
        $form_codi_postal = "Codi postal";
        $form_iban = "Compte bancari IBAN";
        $form_cuota = "Tipus de cuota";
        $form_import = "Col·laboració en import";
        $form_missatge = "Missatge (opcional)";
        $form_mensual = "Mensual";
        $form_anual = "Anual";
        $form_personalitzada = "Personalitzada";
        $form_accept_pp = '* He llegit i accepto la <a href="/avis-legal-politica-proteccio-dades" target="_blank">política de privacitat</a> de Petits Detalls';
        $form_news = "Vull rebre notícies sobre els projectes de Petits Detalls";
        $form_send = "Enviar";

    } else if($idioma == "esp") {
        include_once(BASE_PATH.'/content/es_soci.php');
        // constants
        $form_name = "Nombre y Apellidos";
        $form_dni = "DNI"; 
        $form_email = "Correo electrónico";
        $form_telefon = "Teléfono";
        $form_direccio = "Dirección";
        $form_codi_postal = "Código postal";
        $form_iban = "Cuenta bancaria IBAN"; 
        $form_cuota = "Tipo de cuota";
        $form_import = "Colaboración en importe"; 
        $form_missatge = "Mensaje (opcional)";
        $form_mensual = "Mensual"; 
        $form_anual = "Anual";
        $form_personalitzada = "Personalizada";
        $form_accept_pp = '* He leído y acepto la <a href="/aviso-legal-politica-proteccion-datos" target="_blank">política de privacidad</a> de Petits Detalls';
        $form_news = "Quiero recibir noticias sobre los proyectos de Petits Detalls";
        $form_send = "Enviar";
    }
?>