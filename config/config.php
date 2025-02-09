<?php
    define('BASE_PATH', realpath(dirname(__FILE__) . '/..'));
    require_once BASE_PATH.'/includes/functions.php';
    require_once BASE_PATH.'/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
    $dotenv->load();
    define('LINK_DONACIONS', $_ENV['LINK_DONACIONS']);


?>