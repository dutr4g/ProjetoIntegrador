console.log("Script carregado!");
// Função para pesquisar vagas
function searchJobs() {
  let input = document.getElementById("searchInput");
  let filter = input.value.toUpperCase();
  let table = document.getElementById("tabelaVagas");
  let tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (let i = 0; i < tr.length; i++) {
    let td = tr[i].getElementsByTagName("td");
    let matched = false;
    for (let j = 0; j < td.length; j++) {
      if (td[j]) {
        let txtValue = td[j].textContent || td[j].innerText;
        if (txtValue.toUpperCase().includes(filter)) {
          matched = true;
          break;
        }
      }
    }
    tr[i].style.display = matched ? "" : "none";
  }
}

// Função para filtrar vagas
function filterJobs() {
  let select = document.getElementById("filterInput");
  let option = select.value;
  let table = document.getElementById("tabelaVagas");
  let tr = table.getElementsByTagName("tr");

  // Display all rows if filter option is empty
  if (option === "") {
    for (let i = 0; i < tr.length; i++) {
      tr[i].style.display = "";
    }
    return;
  }

  // Else, apply the filter
  for (let i = 0; i < tr.length; i++) {
    let td = tr[i].getElementsByTagName("td")[3];
    tr[i].style.display = (td && td.textContent === option) ? "" : "none";
  }
}


document.getElementById('viewCandidateForm').addEventListener('submit', function (e) {
  var candidateId = document.getElementById('candidateId').value;
  var baseUrl = "http://localhost/paginas/public/RecrutamentoController/visualizarCandidato/";
  if (candidateId) {
    e.target.action = baseUrl + candidateId;
  } else {
    e.preventDefault();  // Impede o envio do form se o ID do candidato não for válido
    alert("Por favor, insira um ID de candidato válido.");
  }
});


$(document).ready(function() {
  $('#viewCandidateForm').submit(function(e) {
      e.preventDefault(); // Impede o envio normal do formulário

      var candidateId = $('#candidateId').val(); // Obtém o ID do candidato do campo de entrada

      $.get('RecrutamentoController/visualizarCandidato/' + candidateId, function(response) {
          if (response.error) {
              console.log(response.error); // Lida com erros, se necessário
          } else {
              // Atualiza a div com os dados do candidato
              $('#dadosCandidato').html('<div>' +
                  '<h2>Dados do Candidato</h2>' +
                  '<p>ID: ' + response.id + '</p>' +
                  '<p>Nome: ' + response.nome + '</p>' +
                  '<p>Email: ' + response.email + '</p>' +
                  '<p>Telefone: ' + response.telefone + '</p>' +
                  '<p>Mensagem: ' + response.mensagem + '</p>' +
                  '<p>Vaga ID: ' + response.vaga_id + '</p>' +
                  '</div>');
          }
      });
  });
});
document.getElementById('removeVagaForm').addEventListener('submit', function (e) {
  e.preventDefault(); // Impede o envio normal do formulário

  var vagaId = document.getElementById('vagaId').value;
  var baseUrl = "http://localhost/paginas/public/RecrutamentoController/removerVaga/";

  if (vagaId) {
      // Verificar se a linha da vaga existe na tabela
      var vagaRow = document.getElementById('vaga-' + vagaId);
      if (vagaRow) {
          // Exibir a mensagem de confirmação apenas se a linha da vaga existir
          if (confirm('Tem certeza que deseja remover a vaga?')) {
              fetch(baseUrl + vagaId, {
                  method: 'POST'
              }).then(function (response) {
                  if (response.ok) {
                      // Vaga removida com sucesso, faça o que for necessário aqui
                      vagaRow.remove(); // Remove a linha correspondente da tabela
                  } else {
                      // Lida com erros, se necessário
                      console.log('Erro ao remover a vaga');
                  }
              }).catch(function (error) {
                  // Lida com erros, se necessário
                  console.log(error);
              });
          }
      } else {
          alert("Não existe uma vaga correspondente ao ID fornecido.");
      }
  } else {
      alert("Por favor, insira um ID de vaga válido.");
  }
});

document.getElementById('addVagaForm').addEventListener('submit', function (e) {
  e.preventDefault(); // Impede o envio normal do formulário

  var titulo = document.getElementById('titulo').value;
  var descricao = document.getElementById('descricao').value;
  var requisitos = document.getElementById('requisitos').value;
  var baseUrl = "http://localhost/paginas/public/RecrutamentoController/adicionarVaga";

  if (titulo && descricao && requisitos) {
    var formData = new FormData();
    formData.append('titulo', titulo);
    formData.append('descricao', descricao);
    formData.append('requisitos', requisitos);

    fetch(baseUrl, {
      method: 'POST',
      body: formData
    }).then(function (response) {
      if (response.ok) {
        // Vaga adicionada com sucesso, faça o que for necessário aqui
        alert("Vaga adicionada com sucesso.");

        // Redirecione para a página2 ou para outra página de confirmação
        window.location.href = "http://localhost/paginas/public/pagina2";
      } else {
        // Lida com erros, se necessário
        console.log('Erro ao adicionar a vaga');
      }
    }).catch(function (error) {
      // Lida com erros, se necessário
      console.log(error);
    });
  } else {
    alert("Por favor, preencha todos os campos da vaga.");
  }
});


document.getElementById('updateVagaForm').addEventListener('submit', function (e) {
  e.preventDefault(); // Impede o envio normal do formulário

  var vagaId = document.getElementById('vagaIdUpdate').value;
  var baseUrl = "http://localhost/paginas/public/RecrutamentoController/atualizarVaga";


  if (vagaId) {
    // Verificar se a linha da vaga existe na tabela
    var vagaRow = document.getElementById('vaga-' + vagaId);
    if (vagaRow) {
      // Exibir a mensagem de confirmação apenas se a linha da vaga existir
      if (confirm('Tem certeza que deseja atualizar a vaga?')) {
        var formData = new FormData(this);

        fetch(baseUrl, {
          method: 'POST',
          body: formData
        }).then(function (response) {
          if (response.ok) {
            // Vaga atualizada com sucesso, faça o que for necessário aqui
            alert("Vaga atualizada com sucesso.");
            // Atualize a tabela de vagas se necessário
            // ...

            // Redirecione para a página2 ou para outra página de confirmação
            window.location.href = "http://localhost/paginas/public/pagina2";
          } else {
            // Lida com erros, se necessário
            console.log('Erro ao atualizar a vaga');
          }
        }).catch(function (error) {
          // Lida com erros, se necessário
          console.log(error);
        });
      }
    } else {
      alert("Não existe uma vaga correspondente ao ID fornecido.");
    }
  } else {
    alert("Por favor, insira um ID de vaga válido.");
  }
});


document.getElementById('candidaturaForm').addEventListener('submit', function (e) {
  e.preventDefault(); // Impede o envio normal do formulário

  var vagaId = document.querySelector('input[name="vaga_id"]').value;
  var nome = document.querySelector('input[name="nome"]').value;
  var email = document.querySelector('input[name="email"]').value;
  var telefone = document.querySelector('input[name="telefone"]').value;

  if (vagaId && nome && email && telefone) {
      var formData = new FormData(this);

      fetch(this.action, {
          method: 'POST',
          body: formData
      }).then(function (response) {
          if (response.ok) {
              // Candidatura enviada com sucesso, faça o que for necessário aqui
              alert(" Sua Candidatura foi enviada com sucesso.");

              // Redirecione para a página de confirmação de candidatura ou outra página desejada
              window.location.href = "http://localhost/paginas/public/pagina2";
          } else {
              console.log('Erro ao enviar candidatura');
          }
      }).catch(function (error) {
          console.log(error);
      });
  } else {
      alert("Por favor, preencha todos os campos.");
  }
});