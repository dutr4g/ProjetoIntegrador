
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