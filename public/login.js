<<<<<<< HEAD
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
=======
function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Limpar as credenciais do formulário para evitar vazamento de informações
  document.getElementById("username").value = "";
  document.getElementById("password").value = "";

  // Verificar se os campos de usuário e senha estão preenchidos
  if (username.trim() === "" || password.trim() === "") {
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
    displayErrorMessage("Por favor, preencha todos os campos.");
    return false;
  }

<<<<<<< HEAD
  // Realizar autenticação assíncrona do usuário
=======
  // Fazer uma solicitação assíncrona para verificar as credenciais no servidor
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
  authenticateUser(username, password)
    .then(function (response) {
      if (response.success) {
        // Login bem-sucedido
        setAuthenticationCookie(response.token);
<<<<<<< HEAD
        // Redirecionar para a página após o login
        window.location.href = "http://localhost/paginas/public/pagina2";
      } else {
        // Exibir mensagem de erro em caso de falha no login
=======
        window.location.href = "http://localhost/paginas/public/pagina2";
      } else {
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
        displayErrorMessage(response.message);
      }
    })
    .catch(function () {
<<<<<<< HEAD
      // Exibir mensagem de erro em caso de erro durante a autenticação
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
      displayErrorMessage("Ocorreu um erro durante o processo de autenticação. Por favor, tente novamente.");
    });

  return false; // Impedir o envio do formulário antes da resposta assíncrona
}

<<<<<<< HEAD
// Função para exibir mensagem de erro
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
function displayErrorMessage(message) {
  var errorMessage = document.getElementById("error-message");
  errorMessage.innerHTML = message;
}

<<<<<<< HEAD
// Função para autenticar o usuário
function authenticateUser(username, password) {
  return new Promise(function (resolve, reject) {
    // Fazer uma solicitação ao servidor para verificar as credenciais
    fetch("http://localhost/paginas/public/login", {
=======
function authenticateUser(username, password) {
  return new Promise(function (resolve, reject) {
    // Fazer uma solicitação ao servidor para verificar as credenciais
    fetch("http://localhost/paginas/public/index.php/loginController/login", {
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ username: username, password: password }),
    })
      .then(function (response) {
        if (response.ok) {
<<<<<<< HEAD
          return response.json(); // Converter a resposta em formato JSON
=======
          return response.json();
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
        } else {
          throw new Error("Erro na solicitação");
        }
      })
      .then(function (data) {
<<<<<<< HEAD
        resolve(data); // Resolver a promessa com os dados da resposta
      })
      .catch(function (error) {
        reject(error); // Rejeitar a promessa em caso de erro
=======
        resolve(data);
      })
      .catch(function (error) {
        reject(error);
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
      });
  });
}

<<<<<<< HEAD
// Função para definir o cookie de autenticação
function setAuthenticationCookie(token) {
  var expirationDate = new Date();
  expirationDate.setDate(expirationDate.getDate() + 7); // Definir expiração do cookie para 7 dias
=======
function setAuthenticationCookie(token) {
  var expirationDate = new Date();
  expirationDate.setDate(expirationDate.getDate() + 7);
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01

  document.cookie = "authToken=" + token + "; expires=" + expirationDate.toUTCString() + "; path=/";
}

<<<<<<< HEAD
// Função para obter o valor do cookie de autenticação
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
function getAuthenticationCookie() {
  var cookies = document.cookie.split(";");

  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i].trim();

    if (cookie.startsWith("authToken=")) {
<<<<<<< HEAD
      return cookie.substring("authToken=".length); // Obter o valor do token a partir do cookie
    }
  }

  return null; // Retornar nulo se o cookie não for encontrado
}

// Função para verificar a autenticação do usuário
=======
      return cookie.substring("authToken=".length);
    }
  }

  return null;
}

>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
function checkAuthentication() {
  var authToken = getAuthenticationCookie();
  var currentPage = window.location.href;

<<<<<<< HEAD
  // Redirecionar para a página de login se o token de autenticação estiver ausente
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
  if (!authToken && currentPage === "http://localhost/paginas/public/pagina2") {
    window.location.href = "http://localhost/paginas/public/login";
  }
}

<<<<<<< HEAD
// Chamar a função de verificação de autenticação
checkAuthentication();

// Função para fazer logout
function logout() {
  // Remover o cookie de autenticação
  document.cookie = "authToken=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  // Redirecionar para a página de login após o logout
=======
checkAuthentication();

function logout() {
  document.cookie = "authToken=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
  window.location.href = "http://localhost/paginas/public/login";
}
