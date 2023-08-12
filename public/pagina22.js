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

