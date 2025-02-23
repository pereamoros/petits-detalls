<?php
    require_once BASE_PATH.'/dades/evento.php';

    if($event_trigger) {
        ?>
            <style>
                .event{
                    display: none;
                    padding: 1rem 2.5rem;
                    background-color: var(--primary-color);
                    color: var(--bg-color);
                    text-align: center;
                }   
                .close {
                    position: absolute;
                    right: 2.5rem;
                    font-size: 28px;
                    line-height: 1;
                    cursor: pointer;
                }
                .modal {
                    display: none;
                    position: fixed;
                    z-index: 9999;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    padding: 4rem;
                    overflow: auto;
                    background-color: rgba(0,0,0,0.5);
                    backdrop-filter: blur(10px);
                }
                .modal-content {
                    display: grid;
                    grid-template-rows: auto 1fr;
                    place-content: center;
                    gap: 2rem;
                    position: relative;
                    font-size: var(--l-font-size);
                    text-align: center;
                    color: var(--bg-color);
                    height: 100%;

                    p {
                        font-weight: 700;
                    }
                }
                .modal-close {
                    color: white;
                    font-size: var(--xl-font-size);
                    top: -2rem;
                    right: -4rem;
                }
                .modal-img {
                    background-image: url('/images/<?=$event_img?>');
                    background-size: contain;
                    background-position: center;
                    background-repeat: no-repeat;
                }
            </style>
            <div class="event">
                <span><?=$event_text?></span>
                <span class="close" id="close-event-banner">&times;</span>
            </div>

            <div class="modal">
                <div class="modal-content container">
                    <span class="close modal-close" id="close-event-modal">&times;</span>
                    <p><?=$event_text?></p>
                    <div class="modal-img"></div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const modal = document.querySelector('.modal');
                    const closeModal = document.getElementById('close-event-modal');
                    const event = document.querySelector('.event');
                    const closeBanner = document.getElementById('close-event-banner');

                    function mostrarElemento(elemento) {
                        elemento.style.display = 'block';
                    }

                    function ocultarElemento(elemento, claveSessionStorage) {
                        elemento.style.display = 'none';
                        sessionStorage.setItem(claveSessionStorage, 'true');
                    }

                    const elementos = [
                        { elemento: modal, clave: 'modalVist', cerrar: closeModal },
                        { elemento: event, clave: 'bannerVist', cerrar: closeBanner }
                    ];

                    elementos.forEach(({ elemento, clave, cerrar }) => {
                        if (sessionStorage.getItem(clave)!== 'true') {
                            mostrarElemento(elemento);
                        }
                        cerrar.onclick = () => ocultarElemento(elemento, clave);
                    });

                    window.onclick = function(event) {
                        if (event.target == modal) {
                            ocultarElemento(modal, 'modalVist');
                        }
                    };
                });
            </script>
        <?
    }
?>