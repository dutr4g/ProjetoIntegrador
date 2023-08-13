<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JobSide - Login</title>
  <link rel="stylesheet" href="/paginas/public/css/style.css">
</head>
<body>
    <body class="login-page">
  <div class="container">
    <header>
      <nav>
        <ul>
          <li><a href=http://localhost/paginas/public/#" class="btn-primary">Início</a></li>
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
              <h2>Login</h2>
              <form onsubmit="return validateForm()">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required style="width: 80%;">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required style="width: 80%;">
                <div class="error" id="error-message"></div>
                <p><a href="esqueceu-senha.html">Esqueceu a senha?</a></p>
                <button type="submit" class="btn-primary">Entrar</button>
              </form>
              
              <p><a href="http://localhost/paginas/public/">Voltar à página principal</a></p>
            </section>
          </div>
         </section>
    </main>
    <footer>
      <p>&copy; JobSide. All rights reserved.</p>
    </footer>
  </div>
  <script src="http://localhost/paginas/public/loginjobside.js"></script>
</body>
</html>