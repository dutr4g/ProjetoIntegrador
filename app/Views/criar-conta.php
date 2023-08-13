<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JobSide - Criar Conta</title>
  <link rel="stylesheet" href="/paginas/public/css/style.css">
</head>
<body class="login-page">
  <div class="container">
    <header>
      <nav>
        <ul>
<<<<<<< HEAD
          <!-- Links de navegação para as seções do site -->
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
          <li><a href="http://localhost/paginas/public/#" class="btn-primary">Início</a></li>
          <li><a href="http://localhost/paginas/public/#sobre" class="btn-primary">Sobre</a></li>
          <li><a href="http://localhost/paginas/public/#produto" class="btn-primary">Produtos</a></li>
          <li><a href="http://localhost/paginas/public/#contato" class="btn-primary">Contato</a></li>
          <li><a href="#login" class="btn-primary">Login</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="login-container">
        <section class="login">
          <h2>Criar Conta</h2>
<<<<<<< HEAD
          <!-- Formulário de criação de conta com campos de usuário e senha -->
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
          <form action="<?= site_url('criar-conta') ?>" method="POST">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required style="width: 80%;">
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required style="width: 80%;">
            <div class="error" id="error-message"></div>
<<<<<<< HEAD
            <!-- Link para redefinição de senha -->
            <p><a href="esqueceu-senha.html">Esqueceu a senha?</a></p>
            <!-- Botão para criar a conta -->
            <button type="submit" class="btn-primary">Criar Conta</button>
          </form>
          <!-- Link para fazer login caso já tenha uma conta -->
=======
            <p><a href="esqueceu-senha.html">Esqueceu a senha?</a></p>
            <button type="submit" class="btn-primary">Criar Conta</button>
          </form>
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
          <div class="create-account">
            <p>Já tem uma conta? <a href="<?= site_url('login') ?>">Fazer Login</a></p>
          </div>
        </section>
      </div>
    </main>
    <footer>
      <p>&copy; JobSide. All rights reserved.</p>
    </footer>
  </div>
<<<<<<< HEAD
  <!-- Script JavaScript para manipular a criação de conta -->
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
  <script src="http://localhost/paginas/public/login.js"></script>
</body>
</html>
