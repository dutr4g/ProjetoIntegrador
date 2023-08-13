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
              window.location.href = "http://localhost/paginas/public/pagina2";
          } else {
              displayErrorMessage(response.message);
          }
      })
      .catch(function (error) {
          displayErrorMessage("Ocorreu um erro durante o processo de autenticação. Por favor, tente novamente.");
      });

  return false;
}

function authenticateUser(username, password) {
  return fetch('http://localhost/paginas/public/auth/login', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `username=${username}&password=${password}`
  })
  .then(response => response.json())
  .catch(error => {
      console.error('Erro na autenticação:', error);
  });
}

function displayErrorMessage(message) {
  var errorMessage = document.getElementById("error-message");
  errorMessage.innerHTML = message;
}

function checkAuthentication() {
  // A verificação real da autenticação será feita no lado do servidor.
  // Esta função pode ser usada para melhorar a experiência do usuário.
}

checkAuthentication();

function logout() {
  // Aqui, você pode fazer uma solicitação ao servidor para destruir a sessão.
  // Por simplicidade, estamos apenas redirecionando o usuário de volta para a página de login.
  window.location.href = "http://localhost/paginas/public/auth/logout";
}
