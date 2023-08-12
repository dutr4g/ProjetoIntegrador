function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Limpar as credenciais do formulário para evitar vazamento de informações
  document.getElementById("username").value = "";
  document.getElementById("password").value = "";

  // Verificar se os campos de usuário e senha estão preenchidos
  if (username.trim() === "" || password.trim() === "") {
    displayErrorMessage("Por favor, preencha todos os campos.");
    return false;
  }

  // Fazer uma solicitação assíncrona para verificar as credenciais no servidor
  authenticateUser(username, password)
    .then(function (response) {
      if (response.success) {
        // Login bem-sucedido
        setAuthenticationCookie(response.token);
        window.location.href = "http://localhost/paginas/public/pagina2";
      } else {
        displayErrorMessage(response.message);
      }
    })
    .catch(function () {
      displayErrorMessage("Ocorreu um erro durante o processo de autenticação. Por favor, tente novamente.");
    });

  return false; // Impedir o envio do formulário antes da resposta assíncrona
}

function displayErrorMessage(message) {
  var errorMessage = document.getElementById("error-message");
  errorMessage.innerHTML = message;
}

function authenticateUser(username, password) {
  return new Promise(function (resolve, reject) {
    // Fazer uma solicitação ao servidor para verificar as credenciais
    fetch("http://localhost/paginas/public/index.php/loginController/login", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ username: username, password: password }),
    })
      .then(function (response) {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error("Erro na solicitação");
        }
      })
      .then(function (data) {
        resolve(data);
      })
      .catch(function (error) {
        reject(error);
      });
  });
}

function setAuthenticationCookie(token) {
  var expirationDate = new Date();
  expirationDate.setDate(expirationDate.getDate() + 7);

  document.cookie = "authToken=" + token + "; expires=" + expirationDate.toUTCString() + "; path=/";
}

function getAuthenticationCookie() {
  var cookies = document.cookie.split(";");

  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i].trim();

    if (cookie.startsWith("authToken=")) {
      return cookie.substring("authToken=".length);
    }
  }

  return null;
}

function checkAuthentication() {
  var authToken = getAuthenticationCookie();
  var currentPage = window.location.href;

  if (!authToken && currentPage === "http://localhost/paginas/public/pagina2") {
    window.location.href = "http://localhost/paginas/public/login";
  }
}

checkAuthentication();

function logout() {
  document.cookie = "authToken=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  window.location.href = "http://localhost/paginas/public/login";
}
