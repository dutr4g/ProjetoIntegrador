document.addEventListener('DOMContentLoaded', function() {
    const prevButton = document.querySelector('.carousel-control-prev');
    const nextButton = document.querySelector('.carousel-control-next');
    const slides = Array.from(document.querySelectorAll('.carousel-slide'));
    let currentSlideIndex = 0;
    
    // Função para avançar para o próximo slide
    function nextSlide() {
      slides[currentSlideIndex].classList.add('hidden');
      currentSlideIndex = (currentSlideIndex + 1) % slides.length;
      slides[currentSlideIndex].classList.remove('hidden');
    }
    
    // Adicionar evento de clique aos botões de próxima e anterior
    prevButton.addEventListener('click', () => {
      slides[currentSlideIndex].classList.add('hidden');
      currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
      slides[currentSlideIndex].classList.remove('hidden');
    });
    
    nextButton.addEventListener('click', nextSlide);
    
    // Configurar intervalo para passar os slides automaticamente
    let interval = setInterval(nextSlide, 4000); // Mude o intervalo conforme necessário (4 segundos no exemplo)
    
    // Pausar o intervalo quando o mouse estiver sobre o carrossel
    slides.forEach(slide => {
      slide.addEventListener('mouseenter', () => clearInterval(interval));
      slide.addEventListener('mouseleave', () => interval = setInterval(nextSlide, 4000));
    });
  });
  