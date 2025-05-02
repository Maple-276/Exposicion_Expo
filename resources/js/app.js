import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Esperar a que el DOM esté completamente cargado
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const slideNumber = document.getElementById('slideNumber');

    if (slides.length > 0 && slideNumber) {
        // Actualizar el contador inicial
        slideNumber.textContent = `1 / ${slides.length}`;

        // Función para mostrar una diapositiva específica
        window.showSlide = function(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            slides[index].classList.add('active');
            slideNumber.textContent = `${index + 1} / ${slides.length}`;
            
            // Disparar un evento personalizado que indique el cambio de diapositiva
            document.dispatchEvent(new CustomEvent('slideChanged', { 
                detail: { 
                    currentSlide: index,
                    totalSlides: slides.length
                } 
            }));
        }

        // Función para ir a la siguiente diapositiva
        window.nextSlide = function() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        // Función para ir a la diapositiva anterior
        window.prevSlide = function() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Función para ejecutar código
        window.runCode = function() {
            const code = document.getElementById('codeInput')?.value;
            if (code) {
                console.log('Código a ejecutar:', code);
                alert('Esta es una demostración. En una implementación real, aquí se ejecutaría el código.');
            }
        }

        // Inicializar mostrando la primera diapositiva
        showSlide(0);

        // Navegación con teclado
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') nextSlide();
            if (e.key === 'ArrowLeft') prevSlide();
        });
    }

    // Inicializar Prism para resaltado de sintaxis si está disponible
    if (typeof Prism !== 'undefined') {
        Prism.highlightAll();
    }
});
