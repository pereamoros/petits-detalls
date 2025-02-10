<?php
    // print errors
    ini_set('display_errors', 1);

    define('NOTFOUND_BASE_PATH', __DIR__ . '/..');
    require_once NOTFOUND_BASE_PATH . '/config/config.php'; 

    if(!isset($idioma)) { $idioma = 'cat'; }
    include_once BASE_PATH."/dades/menu.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petits Detalls</title>
    <meta name="description" content="Petits Detalls">
    <meta name="keywords" content="">
    <meta name="author" content="Petits Detalls">
    
    <? include_once BASE_PATH.'/includes/head.php'; ?>

</head>
<body>

    <? include_once BASE_PATH.'/views/partials/header.php'; ?>
    <main>
        <section>
            <div class="container just-text text">
                <h1>Aviso legal y Política de protección de datos</h1>
                <h2>Aviso legal</h2>
                <p>Los derechos de propiedad intelectual de los servicios on-line de Petits Detalls y de su contenido pertenecen a dicha sociedad o, en su caso, a terceras personas.</p>
                <p>El usuario puede visualizar todos los elementos, imprimirlos, copiarlos y almacenarlos en el disco duro de su ordenador o en cualquier otro soporte físico siempre y cuando sea, única y exclusivamente, para su uso personal y privado. Para la utilización con fines comerciales de los contenidos de la web, su distribución, así como su modificación, alteración o descompilación, se requiere un permiso previo de Petits Detalls.</p>
                <p>El usuario se compromete a hacer un uso adecuado de los contenidos y servicios que Petits Detalls pueda ofrecer en su sede web y a no emplearlos para incurrir en actividades ilícitas o contrarias a la buena fe y al ordenamiento legal.</p>
                <p>Con la voluntad de mejorar la página web, Petits Detalls se reserva el derecho de efectuar las modificaciones que considere oportunas, pudiendo cambiar, suprimir o añadir tanto los contenidos y servicios que presta como la forma en la que éstos aparezcan presentados o localizados.</p>
                <p>Petits Detalls autoriza menciones a sus contenidos en otras webs, siempre que no reproduzcan los contenidos presentes en la página web de Petits Detalls. En el caso de disponer de un enlace hipertexto a alguna de sus páginas, el usuario debe saber que está entrando en la página web de Petits Detalls y debe percibir en su navegador su dirección URL. Si Petits Detalls detecta el incumplimiento de las anteriores condiciones, así como cualquier utilización indebida de los contenidos presentados en su página web, se reserva el derecho de ejercer todas las acciones civiles y penales necesarias.</p>

                <h2>Protección de datos</h2>
                <p>Petits Detalls, con CIF B61670402 es el Responsable del tratamiento de los datos personales del Usuario y le informa que estos datos serán tratados de conformidad con lo dispuesto en el Reglamento (UE) 2016/679 de 27 de abril de 2016 (GDPR) relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos.</p>
                <p>Finalidad del tratamiento: Se recogerán los datos necesarios para la relación comercial y los que requiera el servicio solicitado por el cliente.</p>
                <p>Plazos de conservación de los datos: Se conservarán mientras exista un interés mutuo para mantener el fin del tratamiento.</p>
                <p>Comunicación de los datos: No se comunicarán los datos a terceros, salvo obligación legal.</p>
                <p>Confidencialidad: Petits Detalls garantiza la confidencialidad de los datos personales facilitados y adoptará las medidas reglamentarias que eviten, en la medida de lo posible, su alteración, pérdida, tratamiento o acceso no autorizado.</p>
                <h3>Derechos que asisten al Usuario:</h3>
                <p>Derecho a retirar el consentimiento en cualquier momento.<br/>
                Derecho de acceso, rectificación, portabilidad y supresión de sus datos y a la limitación u oposición al su tratamiento.<br/>
                Derecho a presentar una reclamación ante la autoridad de control (agpd.es) si considera que el tratamiento no se ajusta a la normativa vigente.<br/>
                Para ejercer tus derechos, puedes enviar un email a Petits Detalls en el email: info@petitsdetalls.org</p>

                <h2>Política de cookies</h2>
                <p>Este sitio web utiliza cookies de terceros: Google Analytics. Son un tipo de cookies diseñadas para obtener datos mientras el usuario accede a la web. Permiten saber el uso que el usuario hace de los diferentes servicios de la página web.</p>
                <p>La finalidad de las cookies utilizadas es con fines estadísticos y para la mejora de la experiencia de usuario.</p>
                <h3>Cómo desactivar o eliminar cookies</h3>
                <p>El Usuario puede configurar su navegador para que no se instalen cookies o para recibir un aviso en pantalla cada vez que una cookie quiera instalarse, pudiendo decidir en cada momento si aceptarlo o no. Igualmente, el usuario puede eliminar las cookies cambiando la configuración de su navegador o eliminarlas manualmente. La eliminación de cookies puede suponer una disminución en la calidad o funcionalidades de la página web.</p><p>Consulta la información relativa a la eliminación/desactivación de cookies de tu navegador:</p>
                <ul>
                    <li><a href="https://support.google.com/chrome/answer/95647?hl=es">Google Chrome </a></li>
                    <li><a href="https://support.apple.com/es-es/HT201265">Safari</a></li>
                    <li><a href="https://support.mozilla.org/es/kb/cookies-informacion-que-los-sitios-web-guardan-en-">Mozilla Firefox </a></li>
                    <li><a href="https://support.microsoft.com/es-es/help/17442/windows-internet-explorer-delete-manage-cookies#ie=ie-10">Internet Explorer </a></li>
                </ul>
            </div>
        </section>
    </main>

    <? include_once BASE_PATH.'/views/partials/footer.php'; ?>
</body>
</html>