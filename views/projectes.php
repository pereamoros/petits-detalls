<?php
    include_once BASE_PATH.'/dades/menu.php';
    include_once BASE_PATH.'/dades/projectes.php';
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
        <section class="hero-img">
            <div class="container">
                <h1><?=$content_h1?></h1>
            </div>
        </section>

        <section>
            <div class="container project__flex">

                <div id="mapa"></div>

                <div class="project__grid">
                    <? foreach($projectes as $projecte) { ?>
                        <div class="card" data-name="<?=$projecte["name"]?>" data-lat="<?=$projecte["lat"]?>" data-lng="<?=$projecte["lng"]?>">
                            <div class="card__img">
                                <img src="<?=$projecte["img"]?>" alt="<?=$projecte["name"]?> - Petits Detalls">
                            </div>
                            <div class="card__text">
                                <h3><?=$projecte["name"]?></h3>
                                <p><?=$projecte["description"]?></p>
                            </div>
                            <a href="<?=$projecte["url"]?>" class="cta cta--c2" title="<?=$projecte["name"]?>"><?=$btn_text?></a>
                        </div>
                    <? } ?>
                </div>

                 
            </div>
        </section>
    </main>

    <? include_once BASE_PATH.'/views/partials/footer.php'; ?>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=<?=$_ENV['GM_API_KEY']?>&callback=initMap" async></script>
    <script>
        async function initMap() {
            const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
            const mapa = new google.maps.Map(document.getElementById("mapa"), {
                mapId: "931e285a16261820",
                center: { lat: 0.6102445, lng: 33.4522531 },
                zoom: 9,
                disableDefaultUI: true
            });

            const coordenadasBusoga = [
                { lng: 32.8216553, lat: 1.4720060 },
                { lng: 32.9727173, lat: 1.4774974 },
                { lng: 33.0661011, lat: 1.4308205 },
                { lng: 33.1512451, lat: 1.3484473 },
                { lng: 33.2487488, lat: 1.3319723 },
                { lng: 33.3064270, lat: 1.3759053 },
                { lng: 33.3805847, lat: 1.3580576 },
                { lng: 33.4080505, lat: 1.2880385 },
                { lng: 33.4753418, lat: 1.2701901 },
                { lng: 33.5179138, lat: 1.2001686 },
                { lng: 33.5632324, lat: 1.1727086 },
                { lng: 33.6250305, lat: 1.1054307 },
                { lng: 33.6923218, lat: 1.0408973 },
                { lng: 33.7321472, lat: 0.9612586 },
                { lng: 33.7939453, lat: 0.9090805 },
                { lng: 33.7953186, lat: 0.7854979 },
                { lng: 33.8612366, lat: 0.6880023 },
                { lng: 33.9230347, lat: 0.5905047 },
                { lng: 34.0040588, lat: 0.5740260 },
                { lng: 34.1290283, lat: 0.5753993 },
                { lng: 34.1194153, lat: 0.5204701 },
                { lng: 34.0960693, lat: 0.4435686 },
                { lng: 34.1111755, lat: 0.3584266 },
                { lng: 34.0480042, lat: 0.2952563 },
                { lng: 33.9147949, lat: 0.0892639 },
                { lng: 33.9862061, lat: -0.1469420 },
                { lng: 33.9340210, lat: -0.4284628 },
                { lng: 33.5206604, lat: -0.4737800 },
                { lng: 33.5247803, lat: 0.1167297 },
                { lng: 33.4272766, lat: 0.2073665 },
                { lng: 33.4149170, lat: 0.2375787 },
                { lng: 33.3874512, lat: 0.3062424 },
                { lng: 33.2995605, lat: 0.3364544 },
                { lng: 33.2899475, lat: 0.3831453 },
                { lng: 33.1910706, lat: 0.4092372 },
                { lng: 33.1292725, lat: 0.5081110 },
                { lng: 33.0496216, lat: 0.5946243 },
                { lng: 33.0400085, lat: 0.6522991 },
                { lng: 33.0564880, lat: 0.7017342 },
                { lng: 33.0372620, lat: 0.8211999 },
                { lng: 32.9383850, lat: 0.9571393 },
                { lng: 32.9342651, lat: 1.1013116 },
                { lng: 32.9177856, lat: 1.2592065 },
                { lng: 32.8532410, lat: 1.3003949 },
                { lng: 32.8216553, lat: 1.4706332 }
            ];

            const poligonoBusoga = new google.maps.Polygon({
                paths: coordenadasBusoga,
                strokeColor: "#7F272C",
                strokeOpacity: 1,
                strokeWeight: 1,
                fillColor: "#FFBD59",
                fillOpacity: 0.35
            });

            poligonoBusoga.setMap(mapa);

            
            const elementosMapa = document.querySelectorAll('.card');
            let lastClicked = null;
            let zIndexBase = 100;

            elementosMapa.forEach(elemento => {
                const lat = parseFloat(elemento.dataset.lat);
                const lng = parseFloat(elemento.dataset.lng);
                const name = elemento.dataset.name;

                const mapTag = document.createElement("div");
                mapTag.className = "map-tag";
                mapTag.textContent = name;

                const marcador = new AdvancedMarkerElement({
                    map: mapa,
                    position: { lat: lat, lng: lng },
                    content: mapTag,
                    zIndex: zIndexBase
                });

                marcador.addListener("click", () => {
                    if (lastClicked) {
                        lastClicked.classList.remove("focused");
                    }
                    elemento.classList.add("focused");
                    lastClicked = elemento;

                    elemento.scrollIntoView({
                        behavior: 'smooth'
                    });
                });

            });
        }

        
    </script>
</body>
</html>