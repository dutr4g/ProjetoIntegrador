<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JobSide - Login</title>
  <link rel="stylesheet" href="/paginas/public/css/style.css">
</head>
<body class="login-page">
  <div class="container">
    <header>
      <nav>
        <ul>
          <li><a href="http://localhost/paginas/public/#" class="btn-primary">Início</a></li>
          <li><a href="http://localhost/paginas/public/#sobre" class="btn-primary">Sobre</a></li>
          <li><a href="http://localhost/paginas/public/#produto" class="btn-primary">Produtos</a></li>
          <li><a href="http://localhost/paginas/public/#contato" class="btn-primary">Contato</a></li>
          <li><a href="#login" class="btn-primary">Login</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="login">
        <h2>Login</h2>
        <form action="<?= site_url('login') ?>" method="POST">
          <label for="username">Usuário:</label>
          <input type="text" id="username" name="username" required style="width: 80%;">
          <label for="password">Senha:</label>
          <input type="password" id="password" name="password" required style="width: 80%;">
          <div class="error" id="error-message"></div>
          <p><a href="esqueceu-senha.html">Esqueceu a senha?</a></p>
          <button type="submit" class="btn-primary">Entrar</button>
        </form>
        <div class="create-account">
          <p>Não tem uma conta? <a href="<?= base_url('criar-conta') ?>">Criar uma conta</a></p>
        </div>
      </section>
    </main>
    <footer>
      <p>&copy; JobSide. All rights reserved.</p>
    </footer>
  </div>
  <script src="http://localhost/paginas/public/login.js"></script>
</body>
</html>
