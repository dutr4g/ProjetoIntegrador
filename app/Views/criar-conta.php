<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JobSide - Criar Conta</title>
  <link rel="stylesheet" href="/paginas/public/css/stylepagina1.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css">
</head>
<body class="bg-gray-200">
  <header class="bg-gradient-to-r from-blue-800 to-black py-4 shadow-md fixed top-0 left-0 w-full z-50">
    <div class="container mx-auto px-4">
      <ul class="flex space-x-4 text-white">
      <li class="nav-item"><a href="http://localhost/paginas/public/#">Início</a></li>
  <li class="nav-item"><a href="http://localhost/paginas/public/#sobre">Sobre</a></li>
  <li class="nav-item"><a href="http://localhost/paginas/public/#beneficios">Benefícios</a></li>
  <li class="nav-item"><a href="http://localhost/paginas/public/#produto">Produtos</a></li>
  <li class="nav-item"><a href="http://localhost/paginas/public/#contato">Contato</a></li>
  <li class="nav-item"><a href="http://localhost/paginas/public/login">Login</a></li>
</ul>
      </ul>
    </div>
  </header>
  <main class="flex justify-center items-center min-h-screen">
    <section class="login-container bg-gray-50 rounded-lg shadow-md p-8 w-96">
      <h2 class="text-2xl font-bold mb-4 text-center">Criar Conta</h2>
      <form action="<?= site_url('criar-conta') ?>" method="POST" class="space-y-4">
        <label for="username" class="block">Usuário:</label>
        <input type="text" id="username" name="username" required class="input w-full bg-gray-100 px-3 py-2 rounded-md">
        <label for="password" class="block">Senha:</label>
        <input type="password" id="password" name="password" required class="input w-full bg-gray-100 px-3 py-2 rounded-md">
        <div class="error" id="error-message"></div>
        <p><a href="esqueceu-senha.html" class="text-blue-500">Esqueceu a senha?</a></p>
        <button type="submit" class="btn-primary text-black">Criar Conta</button>
      </form>
      <div class="create-account mt-4">
        <p class="text-gray-600 text-center">Já tem uma conta? <a href="<?= site_url('login') ?>" class="text-blue-500">Fazer Login</a></p>
      </div>
    </section>
  </main>
  <footer class="text-center mt-4">
    <p>&copy; JobSide. Todos os direitos reservados.</p>
  </footer>
  <script src="http://localhost/paginas/public/login.js"></script>
</body>
</html>
