<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JobSide - O Futuro das Contratações</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css">
  <style>
    /* Custom Styles */
    .btn-primary {
      background-color: #3F83F8;
      color: #FFFFFF;
    }
    .btn-primary:hover {
      background-color: #2563E6;
    }
    .btn-secondary {
      background-color: #FFFFFF;
      border: 2px solid #3F83F8;
      color: #3F83F8;
    }
    .btn-secondary:hover {
      background-color: #F4F7FF;
    }
    .input {
      border-color: #D1D5DB;
    }
    .input:focus {
      border-color: #3F83F8;
    }
    .hero-image {
      background-image: url('http://localhost/paginas/public/img/fundo1.jpg');
    }
    /* Additional Styles */
    .nav-floating {
      position: sticky;
      top: 0;
      background-color: rgba(59, 130, 246, 0.9);
      backdrop-filter: blur(5px);
      z-index: 1000;
    }
  </style>
</head>
<body class="bg-gray-150 font-sans">

  <!-- Header -->
  <header class="bg-gradient-to-r from-blue-800 to-black py-4 shadow-md fixed top-0 left-0 w-full z-50">
    <div class="container mx-auto px-4">
      <nav class="flex justify-between items-center">
        <ul class="flex space-x-4 text-white">
          <li><a href="#">Início</a></li>
          <li><a href="#sobre">Sobre</a></li>
          <li><a href="#beneficios">Benefícios</a></li>
          <li><a href="#produto">Produtos</a></li>
          <li><a href="#contato">Contato</a></li>
          <li><a href="http://localhost/paginas/public/login">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="mt-16">
    <section class="hero-image bg-cover bg-center h-96 flex flex-col justify-center items-center text-white">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 text-center">JobSide - Transformando a Contratação com IA</h1>
      <p class="text-lg md:text-xl lg:text-2xl text-center">Tornando o Processo de Entrevista e Seleção Eficiente e Eficaz</p>
      <a href="#sobre" class="btn-primary mt-6">Saiba Mais</a>
    </section>

    <section id="sobre" class="bg-white py-16">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-8 text-center text-gray-800">Sobre o JobSide</h2>
        <p class="text-lg leading-7 text-gray-700 mb-8">
          O JobSide é um projeto inovador que visa criar um sistema de entrevista e seleção online, utilizando algoritmos e IA para tornar o processo de contratação mais eficiente e eficaz.
        </p>
        <a href="#" class="btn-secondary">Nossa História</a>
      </div>
    </section>

    <section id="beneficios" class="bg-gray-100 py-16">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-8 text-center text-gray-800">Benefícios do JobSide</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white p-6 rounded shadow hover:shadow-md transition duration-300">
            <h3 class="text-xl font-semibold text-gray-800">Automação Inteligente</h3>
            <p class="text-gray-700 mt-2">Algoritmos e IA automatizam o processo de triagem e análise de candidatos.</p>
          </div>
          <!-- Repita para outros benefícios -->
        </div>
      </div>
    </section>

    <section id="produto" class="bg-white py-16">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-8 text-center text-gray-800">Nossos Produtos</h2>
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <li><a href="#" class="bg-white p-4 block rounded shadow hover:shadow-md transition duration-300 text-gray-800">Contratações</a></li>
          <li><a href="#" class="bg-white p-4 block rounded shadow hover:shadow-md transition duration-300 text-gray-800">A Desenvolver</a></li>
          <li><a href="#" class="bg-white p-4 block rounded shadow hover:shadow-md transition duration-300 text-gray-800">A Desenvolver</a></li>
          <li><a href="#" class="bg-white p-4 block rounded shadow hover:shadow-md transition duration-300 text-gray-800">A Desenvolver</a></li>
        </ul>
      </div>
    </section>

    <section id="contato" class="bg-gray-100 py-16">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-8 text-center text-gray-800">Contato</h2>
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
  <footer class="py-4 bg-gray-800 text-white text-center">
    <p class="text-sm">&copy; JobSide. Todos os direitos reservados.</p>
  </footer>

  <script src="jobside.js"></script>
</body>
</html>
=======

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JobSide</title>
  <link rel="stylesheet" href="http://localhost/paginas/public/css/style.css">
</head>
<body>
  <div class="container">
    <header>
      <nav>
        <ul>
          <li><a href="http://localhost/paginas/public/#" class="btn-primary">Início</a></li>
          <li><a href="http://localhost/paginas/public/#sobre" class="btn-primary">Sobre</a></li>
          <li><a href="http://localhost/paginas/public/#produto" class="btn-primary">Produtos</a></li>
          <li><a href="http://localhost/paginas/public/#contato" class="btn-primary">Contato</a></li>
          <li><a href="http://localhost/paginas/public/login"" class="btn-primary">Login</a></li>
        </ul>
      </nav>
      
    </header>
    <main>
      <section class="hero-image">
        <h1>Bem Vindo a JobSide Tecnologic</h1>
        <p>Compania de Software que traz inovações no processo da Gestão de recursos humanos</p>
        <a id="sobre" class="btn-primary">Saiba Mais</a>
      </section>
      <section class="about">
        <h2>Sobre Nós</h2>
        <p>JobSide oferece um serviço de divulgação e procura de vagas, para empresas e para possíveis funcionários!</p>
        <a href="#" class="btn-secondary">Nossa Historia</a>
      </section>
      <section id="produto" class="products">
        <h2>Nossos Produtos</h2>
        <ul>
          <li><a href="#">Contratações</a></li>
          <li><a href="#">A Desenvolver</a></li>
          <li><a href="#">A Desenvolver</a></li>
          <li><a href="#">A Desenvolver</a></li>
        </ul>
      </section>
      <section id="contato" class="contact">
        <h2>Nosso Contato</h2>
        <form>
          <label for="name">Nome:</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <label for="message">Messagem:</label>
          <textarea id="message" name="message" required></textarea>
          <button type="submit" class="btn-primary">Enviar Messagem</button>
        </form>
      </section>
    </main>
    <footer>
      <p>&copy; JobSide. All rights reserved.</p>
    </footer>
  </div>
  <script src="jobside.js"></script>
</body>
</html>
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
