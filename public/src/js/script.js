function goToIframe(elemento) {
    url = elemento.dataset.src;
    h2 = elemento.dataset.h2;
    var { pdfjsLib } = globalThis;

    const canvasText = document.querySelector(".canvas-text");
    canvasText.classList.add("hidden");
    const canvasContainer = document.querySelector(".canvas-content__canvas");
    canvasContainer.classList.add("visible");
    const canvasPage = document.querySelector("#canvas-page");
    canvasPage.classList.add("visible");
    const canvasTitle = document.querySelector(".canvas-container h2");
    canvasTitle.textContent = h2;

    pdfjsLib.GlobalWorkerOptions.workerSrc = '/src/pdfjs/build/pdf.worker.js';

    var pdfDoc = null,
    pageNum = 1,
    pageRendering = false,
    pageNumPending = null,
    scale = 1,
    canvas = document.getElementById('the-canvas'),
    ctx = canvas.getContext('2d');


    function renderPage(num) {
        pageRendering = true;
        
        pdfDoc.getPage(num).then(function(page) {
            var viewport = page.getViewport({scale: scale});
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render PDF page into canvas context
            var renderContext = {
                canvasContext: ctx,
                viewport: viewport
            };
            var renderTask = page.render(renderContext);

            // Wait for rendering to finish
            renderTask.promise.then(function() {
            pageRendering = false;
            if (pageNumPending !== null) {
                // New page rendering is pending
                renderPage(pageNumPending);
                pageNumPending = null;
            }
            });
        });

        // Update page counters
        document.getElementById('page_num').textContent = num;
    }

    // If another page rendering in progress, waits until the rendering is finised. Otherwise, executes rendering immediately.
    function queueRenderPage(num) {
        if (pageRendering) {
            pageNumPending = num;
        } else {
            renderPage(num);
        }
    }

    // Displays previous page.
    function onPrevPage() {
        if (pageNum <= 1) {
            return;
        }
        pageNum--;
        queueRenderPage(pageNum);
    }
    document.getElementById('prev').addEventListener('click', onPrevPage);

    // Displays next page.
    function onNextPage() {
        if (pageNum >= pdfDoc.numPages) {
            return;
        }
        pageNum++;
        queueRenderPage(pageNum);
    }
    document.getElementById('next').addEventListener('click', onNextPage);

    // Asynchronously downloads PDF
    pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
        pdfDoc = pdfDoc_;
        document.getElementById('page_count').textContent = pdfDoc.numPages;

        // Initial/first page rendering
        renderPage(pageNum);
    });


    // Input navegació per pàgines
    const pageInputContainer = document.querySelector(".canvas-page__input");
    pageInputContainer.classList.add("visible");
    const pageInput = document.querySelector("#page-input");
    const goToPageButton = document.querySelector("#go-to-page");

    goToPageButton.addEventListener("click", () => {
        const pageNumber = parseInt(pageInput.value); // Obtener el número de página del input

        if (pageNumber >= 1 && pageNumber <= pdfDoc.numPages) {
            pageNum = pageNumber;
            queueRenderPage(pageNum); // Renderizar la página deseada
        } else {
            alert("Número de página inválido."); // Manejar el caso de número de página inválido
        }
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
