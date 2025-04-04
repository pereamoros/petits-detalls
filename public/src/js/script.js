function goToIframe(elemento) {
    const url = elemento.dataset.src;
    const h2 = elemento.dataset.h2;

    const canvasText = document.querySelector(".canvas-text");
    canvasText.classList.add("hidden");
    const canvasContainer = document.querySelector(".canvas-content__canvas");
    canvasContainer.classList.add("visible");
    const canvasPageElement = document.querySelector("#canvas-page");
    canvasPageElement.classList.add("visible");
    const canvasTitle = document.querySelector(".canvas-container h2");
    canvasTitle.textContent = h2;

    const { pdfjsLib } = globalThis;
    pdfjsLib.GlobalWorkerOptions.workerSrc = '/src/pdfjs/build/pdf.worker.js';

    let canvas = document.getElementById('the-canvas');
    let ctx = canvas.getContext('2d');
    let loader = document.getElementById('loader');

    let pdfState = {
        pdfDoc: null,
        pageNum: 1,
        pageRendering: false,
        pageNumPending: null,
        scale: 1,
        renderTask: null,
    };

    function showLoader() {
        loader.style.display = 'flex';
    }

    function hideLoader() {
        loader.style.display = 'none';
    }

    function renderPage(pageNumber) {
        if (pdfState.pageRendering || !pdfState.pdfDoc) {
            pdfState.pageNumPending = pageNumber;
            return;
        }

        pdfState.pageRendering = true;
        showLoader();

        pdfState.pdfDoc.getPage(pageNumber).then(function (page) {
            const viewport = page.getViewport({ scale: pdfState.scale });
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            const renderContext = {
                canvasContext: ctx,
                viewport: viewport
            };

            if (pdfState.renderTask) {
                pdfState.renderTask.cancel();
            }

            pdfState.renderTask = page.render(renderContext);

            pdfState.renderTask.promise.then(function () {
                pdfState.pageRendering = false;
                pdfState.pageNum = pageNumber;
                document.getElementById('page_num').textContent = pageNumber;
                hideLoader();

                if (pdfState.pageNumPending !== null) {
                    let pendingPage = pdfState.pageNumPending;
                    pdfState.pageNumPending = null;
                    renderPage(pendingPage);
                }
            }).catch(function (error) {
                console.error("Error al renderizar página:", error);
                pdfState.pageRendering = false;
                hideLoader();
            });
        }).catch(function (error) {
            console.error("Error al obtener la página:", error);
            pdfState.pageRendering = false;
            hideLoader();
        });
    }

    function queueRenderPage(num) {
        if (pdfState.pageRendering) {
            pdfState.pageNumPending = num;
        } else {
            renderPage(num);
        }
    }

    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    const goToPageButton = document.getElementById('go-to-page');

    prevButton.replaceWith(prevButton.cloneNode(true));
    nextButton.replaceWith(nextButton.cloneNode(true));
    goToPageButton.replaceWith(goToPageButton.cloneNode(true));

    document.getElementById('prev').addEventListener('click', function () {
        if (pdfState.pageNum > 1) {
            queueRenderPage(pdfState.pageNum - 1);
        }
    });

    document.getElementById('next').addEventListener('click', function () {
        if (pdfState.pdfDoc && pdfState.pageNum < pdfState.pdfDoc.numPages) {
            queueRenderPage(pdfState.pageNum + 1);
        }
    });

    document.getElementById('go-to-page').addEventListener("click", function () {
        if (!pdfState.pdfDoc) return;
        const pageNumber = parseInt(document.getElementById('page-input').value);
        if (pageNumber >= 1 && pageNumber <= pdfState.pdfDoc.numPages) {
            queueRenderPage(pageNumber);
        } else {
            alert("Número de página inválido.");
        }
    });

    const pageInputContainer = document.querySelector(".canvas-page__input");
    pageInputContainer.classList.add("visible");
    const pageInput = document.querySelector("#page-input");
    document.getElementById('go-to-page').addEventListener("click", function () {
        const pageNumber = parseInt(pageInput.value);
        if (pageNumber >= 1 && pageNumber <= pdfState.pdfDoc.numPages) {
            queueRenderPage(pageNumber);
        } else {
            alert("Número de página inválido.");
        }
    });

    showLoader();
    pdfjsLib.getDocument(url).promise.then((newPdfDoc) => {
        if (pdfState.pdfDoc) {
            pdfState.pdfDoc.destroy();
        }
        pdfState.pdfDoc = newPdfDoc;
        pdfState.pageNum = 1;
        pdfState.pageRendering = false;
        pdfState.pageNumPending = null;
        document.getElementById('page_count').textContent = newPdfDoc.numPages;
        renderPage(pdfState.pageNum);
        hideLoader();
    }).catch((error) => {
        console.error("Error al cargar PDF:", error);
        hideLoader();
    });
}


// SMOOTH SCROLL
const enlacesInternos = document.querySelectorAll('a[href^="#"]');
enlacesInternos.forEach(enlace => {
  enlace.addEventListener('click', function(event) {
    event.preventDefault();

    const id = this.getAttribute('href'); 
    const elementoDestino = document.querySelector(id); 

    elementoDestino.scrollIntoView({
      behavior: 'smooth'
    });
  });
});