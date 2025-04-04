<?php
require_once __DIR__ .'/../config/config.php'; 

$request = $_SERVER['REQUEST_URI'];
$routes = [
    '' => ['view' => 'home.php', 'idioma' => 'cat', 'correspondencies' => ['/', '/es']],
    '/' => ['view' => 'home.php', 'idioma' => 'cat', 'correspondencies' => ['/', '/es']],
    '/es' => ['view' => 'home.php', 'idioma' => 'esp', 'correspondencies' => ['/', '/es']],
    '/equip' => ['view' => 'equip.php', 'idioma' => 'cat', 'correspondencies' => ['/equip', '/equipo']],
    '/equipo' => ['view' => 'equip.php', 'idioma' => 'esp', 'correspondencies' => ['/equip', '/equipo']],
    '/projectes' => ['view' => 'projectes.php', 'idioma' => 'cat', 'correspondencies' => ['/projectes', '/proyectos']],
    '/proyectos' => ['view' => 'projectes.php', 'idioma' => 'esp', 'correspondencies' => ['/projectes', '/proyectos']],
    '/mupenzi' => ['view' => 'projecte-detall.php', 'idioma' => 'cat', 'correspondencies' => ['/mupenzi', '/mupenzi-es']],
    '/mupenzi-es' => ['view' => 'projecte-detall.php', 'idioma' => 'esp', 'correspondencies' => ['/mupenzi', '/mupenzi-es']],
    '/smiles-for-the-future' => ['view' => 'projecte-detall.php', 'idioma' => 'cat', 'correspondencies' => ['/smiles-for-the-future', '/smiles-for-the-future-es']],
    '/smiles-for-the-future-es' => ['view' => 'projecte-detall.php', 'idioma' => 'esp', 'correspondencies' => ['/smiles-for-the-future', '/smiles-for-the-future-es']],
    '/gomesi' => ['view' => 'projecte-detall.php', 'idioma' => 'cat', 'correspondencies' => ['/gomesi', '/gomesi-es']],
    '/gomesi-es' => ['view' => 'projecte-detall.php', 'idioma' => 'esp', 'correspondencies' => ['/gomesi', '/gomesi-es']],
    '/omukisa' => ['view' => 'projecte-detall.php', 'idioma' => 'cat', 'correspondencies' => ['/omukisa', '/omukisa-es']],
    '/omukisa-es' => ['view' => 'projecte-detall.php', 'idioma' => 'esp', 'correspondencies' => ['/omukisa', '/omukisa-es']],
    '/abawala' => ['view' => 'projecte-detall.php', 'idioma' => 'cat', 'correspondencies' => ['/abawala', '/abawala-es']],
    '/abawala-es' => ['view' => 'projecte-detall.php', 'idioma' => 'esp', 'correspondencies' => ['/abawala', '/abawala-es']],
    '/collabora' => ['view' => 'collabora.php', 'idioma' => 'cat', 'correspondencies' => ['/collabora', '/colabora']],
    '/colabora' => ['view' => 'collabora.php', 'idioma' => 'esp', 'correspondencies' => ['/collabora', '/colabora']],
    '/fes-te-soci' => ['view' => 'soci.php', 'idioma' => 'cat', 'correspondencies' => ['/fes-te-soci', '/hazte-socio']],
    '/hazte-socio' => ['view' => 'soci.php', 'idioma' => 'esp', 'correspondencies' => ['/fes-te-soci', '/hazte-socio']],
    '/collaboracions' => ['view' => 'contacte.php', 'idioma' => 'cat', 'correspondencies' => ['/collaboracions', '/colaboraciones']],
    '/colaboraciones' => ['view' => 'contacte.php', 'idioma' => 'esp', 'correspondencies' => ['/collaboracions', '/colaboraciones']],
    '/publicacions' => ['view' => 'publicacions.php', 'idioma' => 'cat', 'correspondencies' => ['/publicacions', '/publicaciones']],
    '/publicaciones' => ['view' => 'publicacions.php', 'idioma' => 'esp', 'correspondencies' => ['/publicacions', '/publicaciones']],
    '/contacte' => ['view' => 'contacte.php', 'idioma' => 'cat', 'correspondencies' => ['/contacte', '/contacto']],
    '/contacto' => ['view' => 'contacte.php', 'idioma' => 'esp', 'correspondencies' => ['/contacte', '/contacto']],
    '/avis-legal-politica-proteccio-dades' => ['view' => 'politiques.php', 'idioma' => 'cat', 'correspondencies' => ['/avis-legal-politica-proteccio-dades', '/aviso-legal-politica-proteccion-datos']],
    '/aviso-legal-politica-proteccion-datos' => ['view' => 'politiques.php', 'idioma' => 'esp', 'correspondencies' => ['/avis-legal-politica-proteccio-dades', '/aviso-legal-politica-proteccion-datos']]
];
$idioma = 'cat';

if (array_key_exists($request, $routes)) {
    $route = $routes[$request];
    
    if (isset($route['idioma'])) {
        $idioma = $route['idioma'];
    }
    
    if (isset($route['correspondencies'])) {
        $correspondencies = $route['correspondencies'];
    }

    require BASE_PATH.'/views/'. $route['view'];

} else {
    http_response_code(404);
    require BASE_PATH.'/views/404.php';
    exit;
}
?>