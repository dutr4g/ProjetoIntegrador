<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JobSide - O Futuro das Contratações</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css">
  <link rel="stylesheet" href="/paginas/public/css/stylepagina1.css">
     
</head>
<body class="bg-gray-150 font-sans">
<!-- Header -->
<header class="bg-gradient-to-r from-blue-800 to-black py-4 shadow-md fixed top-0 left-0 w-full z-50">
  <div class="container mx-auto px-4 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center">
      <img src="http://localhost/paginas/public/img/logojobside.png" alt="Logo da JobSide" class="w-10 h-10 mr-2"> <!-- Ajuste o caminho e o tamanho da imagem conforme necessário -->
      <h1 class="text-white font-bold text-xl">JobSide</h1>
    </div>

    <!-- Menu de navegação -->
    <ul class="flex space-x-4 text-white">
      <li class="nav-item"><a href="#">Início</a></li>
      <li class="nav-item"><a href="#sobre">Sobre</a></li>
      <li class="nav-item"><a href="#beneficios">Benefícios</a></li>
      <li class="nav-item"><a href="#produto">Produtos</a></li>
      <li class="nav-item"><a href="#contato">Contato</a></li>
      <li class="nav-item"><a href="http://localhost/paginas/public/login">Login</a></li>
    </ul>
  </div>
</header>


  <!-- Main Content -->
  <main class="mt-16 space-y-18">
  <section class="hero-image bg-cover bg-center h-96 relative mt-16">
      <div class="absolute inset-0 bg-black opacity-50"></div>
      <div class="carousel-slide">
        <img src="http://localhost/paginas/public/img/slide1.jpg" alt="Slide 1" class="w-full h-full object-cover">
      </div>
      <div class="content">
  <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-2 lg:mb-7">JobSide - Transformando a Contratação com IA</h1>
  <p class="text-lg md:text-xl lg:text-2xl mb-4 lg:mb-6">Tornando o Processo de Entrevista e Seleção Eficiente e Eficaz</p>
  <a href="#sobre" class="btn-primary mt-6">Saiba Mais</a>
</div>

      <!-- Slides -->
      <div class="carousel-slide">
        <img src="http://localhost/paginas/public/img/slide1.jpg" alt="Slide 1" class="w-full h-full object-cover">
      </div>
      <div class="carousel-slide hidden">
        <img src="http://localhost/paginas/public/img/slide2.jpg" alt="Slide 2" class="w-full h-full object-cover">
      </div>
      <div class="carousel-slide hidden">
        <img src="http://localhost/paginas/public/img/slide3.jpg" alt="Slide 3" class="w-full h-full object-cover">
      </div>
      <div class="carousel-slide hidden">
        <img src="http://localhost/paginas/public/img/slide4.jpg" alt="Slide 4" class="w-full h-full object-cover">
      </div>
    </div>
    <!-- Controls -->
    <div class="carousel-controls absolute bottom-4 left-0 right-0 flex justify-center">
      <button class="carousel-control-prev text-white">
        <span class="sr-only">Previous</span>
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
      </button>
      <button class="carousel-control-next text-white">
        <span class="sr-only">Next</span>
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>
  </div>
</section>




    <section id="sobre" class="bg-white py-16 mt-8">
      <div class="container mx-auto px-4">
        <h2 class="section-heading text-2xl md:text-3xl lg:text-4xl font-bold mb-8 text-center text-gray-800">Sobre o JobSide</h2>
        <p class="text-lg leading-7 text-gray-700 mb-8">
          O JobSide é um projeto inovador que visa criar um sistema de entrevista e seleção online, utilizando algoritmos e IA para tornar o processo de contratação mais eficiente e eficaz.
        </p>
        <a href="#" class="btn-secondary ">Nossa História</a>
      </div>
    </section>

    <section id="beneficios" class="bg-gray-100 py-16">
      <div class="container mx-auto px-4">
        <h2 class="section-heading text-2xl md:text-3xl lg:text-4xl font-bold mb-8 text-center text-gray-800">Benefícios do JobSide</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white p-6 rounded shadow hover:shadow-md transition duration-300">
            <span class="feature-icon">🚀</span>
            <h3 class="feature-title text-xl font-semibold">Automação Inteligente</h3>
            <p class="feature-description text-gray-700 mt-2">Algoritmos e IA automatizam o processo de triagem e análise de candidatos.</p>
          </div>
          <!-- Repita para outros benefícios -->
          <div class="bg-white p-6 rounded shadow hover:shadow-md transition duration-300">
  <span class="feature-icon">🔍</span>
  <h3 class="feature-title text-xl font-semibold">Busca Avançada</h3>
  <p class="feature-description text-gray-700 mt-2">Pesquise candidatos com critérios específicos e encontre o ajuste perfeito para sua vaga.</p>
</div>
<div class="bg-white p-6 rounded shadow hover:shadow-md transition duration-300">
  <span class="feature-icon">💼</span>
  <h3 class="feature-title text-xl font-semibold">Agilidade no Processo</h3>
  <p class="feature-description text-gray-700 mt-2">Reduza o tempo de contratação e agilize a identificação dos candidatos mais qualificados.</p>
</div>

        </div>
      </div>
    </section>

    <section id="produto" class="bg-white py-16 mt-8">
      <div class="container mx-auto px-4">
        <h2 class="section-heading text-2xl md:text-3xl lg:text-4xl font-bold mb-8 text-center text-gray-800">Nossos Produtos</h2>
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <li><a href="#" class="bg-white p-4 block rounded shadow hover:shadow-md transition duration-300 text-gray-800">Contratações</a></li>
          <li><a href="#" class="bg-white p-4 block rounded shadow hover:shadow-md transition duration-300 text-gray-800">A Desenvolver</a></li>
          <li><a href="#" class="bg-white p-4 block rounded shadow hover:shadow-md transition duration-300 text-gray-800">A Desenvolver</a></li>
          <li><a href="#" class="bg-white p-4 block rounded shadow hover:shadow-md transition duration-300 text-gray-800">A Desenvolver</a></li>
        </ul>
      </div>
    </section>

    <section id="contato" class="bg-gray-100 py-16 mt-8">
      <div class="container mx-auto px-4">
        <h2 class="section-heading text-2xl md:text-3xl lg:text-4xl font-bold mb-8 text-center text-gray-800">Contato</h2>
        <div class="max-w-lg mx-auto">
          <form>
            <div class="mb-4">
              <label for="name" class="block mb-2 font-semibold text-gray-800">Nome:</label>
              <input type="text" id="name" name="name" class="input p-3 rounded-lg w-full focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            
            <div class="mb-4">
              <label for="email" class="block mb-2 font-semibold text-gray-800">Email:</label>
              <input type="email" id="email" name="email" class="input p-3 rounded-lg w-full focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            
            <div class="mb-4">
              <label for="message" class="block mb-2 font-semibold text-gray-800">Mensagem:</label>
              <textarea id="message" name="message" class="input p-3 rounded-lg w-full focus:outline-none focus:ring focus:border-blue-300 h-32" required></textarea>
            </div>
            
            <button type="submit" class="btn-primary w-full py-3 text-lg font-semibold rounded-lg transition duration-300 hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Enviar Mensagem</button>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="py-4 bg-gray-800 text-white text-center ">
    <p class="text-sm">&copy; JobSide. Todos os direitos reservados.</p>
  </footer>

  <script src="jobside.js"></script>
  <script src="/paginas/public/carousel.js"></script>
</body>
</html>
