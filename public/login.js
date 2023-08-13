// Função para validar o formulário de login
function validateForm() {
  // Obter valores dos campos de usuário e senha
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Limpar os campos do formulário para evitar vazamento de informações
  document.getElementById("username").value = "";
  document.getElementById("password").value = "";

  // Verificar se os campos estão preenchidos
  if (username.trim() === "" || password.trim() === "") {
    // Exibir mensagem de erro se os campos estiverem vazios
    displayErrorMessage("Por favor, preencha todos os campos.");
    return false;
  }

  // Realizar autenticação assíncrona do usuário
  authenticateUser(username, password)
    .then(function (response) {
      if (response.success) {
        // Login bem-sucedido
        setAuthenticationCookie(response.token);
        // Redirecionar para a página após o login
        window.location.href = "http://localhost/paginas/public/pagina2";
      } else {
        // Exibir mensagem de erro em caso de falha no login
        displayErrorMessage(response.message);
      }
    })
    .catch(function () {
      // Exibir mensagem de erro em caso de erro durante a autenticação
      displayErrorMessage("Ocorreu um erro durante o processo de autenticação. Por favor, tente novamente.");
    });

  return false; // Impedir o envio do formulário antes da resposta assíncrona
}

// Função para exibir mensagem de erro
function displayErrorMessage(message) {
  var errorMessage = document.getElementById("error-message");
  errorMessage.innerHTML = message;
}

// Função para autenticar o usuário
function authenticateUser(username, password) {
  return new Promise(function (resolve, reject) {
    // Fazer uma solicitação ao servidor para verificar as credenciais
    fetch("http://localhost/paginas/public/login", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ username: username, password: password }),
    })
      .then(function (response) {
        if (response.ok) {
          return response.json(); // Converter a resposta em formato JSON
        } else {
          throw new Error("Erro na solicitação");
        }
      })
      .then(function (data) {
        resolve(data); // Resolver a promessa com os dados da resposta
      })
      .catch(function (error) {
        reject(error); // Rejeitar a promessa em caso de erro
      });
  });
}

// Função para definir o cookie de autenticação
function setAuthenticationCookie(token) {
  var expirationDate = new Date();
  expirationDate.setDate(expirationDate.getDate() + 7); // Definir expiração do cookie para 7 dias

  document.cookie = "authToken=" + token + "; expires=" + expirationDate.toUTCString() + "; path=/";
}

// Função para obter o valor do cookie de autenticação
function getAuthenticationCookie() {
  var cookies = document.cookie.split(";");

  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i].trim();

    if (cookie.startsWith("authToken=")) {
      return cookie.substring("authToken=".length); // Obter o valor do token a partir do cookie
    }
  }

  return null; // Retornar nulo se o cookie não for encontrado
}

// Função para verificar a autenticação do usuário
function checkAuthentication() {
  var authToken = getAuthenticationCookie();
  var currentPage = window.location.href;

  // Redirecionar para a página de login se o token de autenticação estiver ausente
  if (!authToken && currentPage === "http://localhost/paginas/public/pagina2") {
    window.location.href = "http://localhost/paginas/public/login";
  }
}

// Chamar a função de verificação de autenticação
checkAuthentication();

// Função para fazer logout
function logout() {
  // Remover o cookie de autenticação
  document.cookie = "authToken=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  // Redirecionar para a página de login após o logout
  window.location.href = "http://localhost/paginas/public/login";
}
