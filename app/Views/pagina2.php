<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>JobSide - Dashboard</title>
  <link rel="stylesheet" href="/paginas/public/css/style.css">
  <link rel="stylesheet" href="/paginas/public/css/style2.css">
</head>
<body>
  <div class="container">
<<<<<<< HEAD
    <!-- Cabeçalho -->
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
    <header>
      <nav>
        <ul>
          <li><a href="http://localhost/paginas/public/#" class="btn-primary">Início</a></li>
          <li><a href="http://localhost/paginas/public/#sobre" class="btn-primary">Sobre</a></li>
          <li><a href="http://localhost/paginas/public/#produto" class="btn-primary">Produtos</a></li>
          <li><a href="http://localhost/paginas/public/#contato" class="btn-primary">Contato</a></li>
          <li><a href="http://localhost/paginas/public/login" class="btn-primary">Login</a></li>
<<<<<<< HEAD
          <!-- Formulário de Logout -->
          <form id="logout-form" action="http://localhost/paginas/public/logout" method="post">
            <button type="submit" class="btn-primary">Logout</button>
          </form>
        </ul>
      </nav>
    </header>
    <!-- Conteúdo Principal -->
    <main>
     
      <!-- Mensagem de Sucesso após o Login -->
=======
          <li><a href="http://localhost/paginas/public/login" class="btn-primary" onclick="logout()">Logout</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="hero-image">
        <h1>Bem-vindo à JobSide Tecnologic</h1>
        <p>Companhia de Software que traz inovações no processo de Gestão de Recursos Humanos</p>
      </section>
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
      <section class="success-message">
        <h2>Login bem-sucedido!</h2>
        <p>Você agora tem acesso ao painel de controle da JobSide.</p>
        <a href="#" class="btn-primary">Ir para o Painel de Controle</a>
      </section>
<<<<<<< HEAD
      <!-- Painel de Controle -->
      <section class="panel">
        <!-- Lista de Vagas -->
        <div class="panel-item">
          <h2>Lista de Vagas</h2>
          <div>
            <!-- Campo de pesquisa de vagas -->
=======
      <section class="panel">
        <div class="panel-item">
          <h2>Lista de Vagas</h2>
          <div>
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
            <label for="searchInput">Pesquisar Vagas:</label>
            <input type="text" id="searchInput" onkeyup="searchJobs()" placeholder="Digite o critério de pesquisa" autocomplete="off">
          </div>
          <div>
<<<<<<< HEAD
            <!-- Menu suspenso para filtrar vagas -->
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
            <label for="filterInput">Filtrar Vagas:</label>
            <select id="filterInput" onchange="filterJobs()" autocomplete="off">
              <option value="">Todos</option>
              <option value="tipoEmprego">Tipo de Emprego</option>
              <option value="nivelExperiencia">Nível de Experiência</option>
              <option value="setor">Setor</option>
            </select>
          </div>
<<<<<<< HEAD
          <!-- Tabela de Vagas -->
          <table id="tabelaVagas">
            <thead>
              <tr>
                <th>ID da Vaga</th>
                <th>Título da Vaga</th>
                <th>Descrição</th>
                <th>Requisitos</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody id="vagasBody">
              <!-- Loop para exibir informações das vagas -->
              <?php foreach ($vagas as $vaga): ?>
                <tr id="vaga-<?= $vaga['id'] ?>">
                  <td><?= $vaga['id'] ?></td>
                  <td><?= $vaga['titulo'] ?></td>
                  <td><?= $vaga['descricao'] ?></td>
                  <td><?= $vaga['requisitos'] ?></td>
                  <td><?= $vaga['status'] ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- Número de Vagas em Aberto -->
=======
          
          <table id="tabelaVagas">
    <thead>
        <tr>
            <th>ID da Vaga</th>
            <th>Título da Vaga</th>
            <th>Descrição</th>
            <th>Requisitos</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody id="vagasBody">
        <?php foreach ($vagas as $vaga): ?>
            <tr id="vaga-<?= $vaga['id'] ?>">
                <td><?= $vaga['id'] ?></td>
                <td><?= $vaga['titulo'] ?></td>
                <td><?= $vaga['descricao'] ?></td>
                <td><?= $vaga['requisitos'] ?></td>
                <td><?= $vaga['status'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


</tbody>
          </table>
          <!-- Conteúdo do topo aqui -->
      <section class="panel">
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
        <div class="panel-item">
          <h2>Número de Vagas em Aberto</h2>
          <p>O número de vagas em aberto é: <?php echo esc($numero_vagas); ?></p>
        </div>
        <!-- Atribuir teste -->
        <div class="panel-item">
          <h2>Atribuir teste</h2>
<<<<<<< HEAD
          <!-- Formulário para atribuir teste a candidato -->
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
          <form action="/RecrutamentoController/atribuirTeste" method="post">
            <input type="text" name="candidato_id" placeholder="ID do candidato">
            <input type="text" name="teste_id" placeholder="ID do teste">
            <button type="submit">Atribuir teste</button>
          </form>
        </div>
<<<<<<< HEAD
        <!-- Enviar mensagem -->
        <div class="panel-item">
          <h2>Enviar mensagem</h2>
          <!-- Formulário para enviar mensagem a candidato -->
=======
      
        <!-- Enviar mensagem -->
        <div class="panel-item">
          <h2>Enviar mensagem</h2>
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
          <form action="/RecrutamentoController/enviarMensagem" method="post">
            <input type="text" name="candidato_id" placeholder="ID do candidato">
            <textarea name="mensagem" placeholder="Mensagem"></textarea>
            <button type="submit">Enviar mensagem</button>
          </form>
        </div>
<<<<<<< HEAD
        <!-- Adicionar vaga -->
        <div class="panel-item">
          <h2>Adicionar vaga</h2>
          <!-- Formulário para adicionar nova vaga -->
          <form id="addVagaForm" action="<?= site_url('RecrutamentoController/adicionarVaga') ?>" method="post">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Título da vaga" required>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" placeholder="Descrição da vaga" required></textarea>
            <label for="requisitos">Requisitos:</label>
            <textarea id="requisitos" name="requisitos" placeholder="Requisitos da vaga" required></textarea>
            <button type="submit">Adicionar vaga</button>
          </form>
        </div>
        <!-- Atualizar vaga -->
        <div class="panel-item">
          <h2>Atualizar vaga</h2>
          <!-- Formulário para atualizar informações de uma vaga -->
          <form id="updateVagaForm" action="<?= site_url('RecrutamentoController/atualizarVaga') ?>" method="post">
            <input type="text" id="vagaIdUpdate" name="id" placeholder="ID da vaga">
            <input type="text" name="titulo" placeholder="Título">
            <textarea name="descricao" placeholder="Descrição"></textarea>
            <textarea name="requisitos" placeholder="Requisitos"></textarea>
            <button type="submit">Atualizar vaga</button>
          </form>
        </div>
        <!-- Remover vaga -->
        <div class="panel-item">
          <h2>Remover vaga</h2>
          <!-- Formulário para remover uma vaga -->
          <form id="removeVagaForm" action="<?= site_url('RecrutamentoController/removerVaga') ?>" method="post">
            <input type="text" id="vagaId" name="id" placeholder="ID da vaga">
            <button type="submit">Remover vaga</button>
          </form>
        </div>
        <!-- Exibir mensagem de sucesso -->
        <?php if (session()->has('success')): ?>
          <div class="success-message">
            <?= session()->getFlashdata('success') ?>
          </div>
        <?php endif; ?>
        <!-- Visualizar candidato -->
        <div class="panel-item">
          <h2>Visualizar candidato</h2>
          <!-- Formulário para visualizar informações de um candidato -->
          <form id="viewCandidateForm" action="<?= site_url('RecrutamentoController/visualizarCandidato') ?>" method="get">
            <input type="text" id="candidateId" name="id" placeholder="ID do candidato">
            <button type="submit">Visualizar candidato</button>
          </form>
          <!-- Dados do candidato exibidos aqui -->
          <div id="dadosCandidato">
            <?php if (isset($candidato)): ?>
              <div>
                <h2>Dados do Candidato</h2>
                <p>ID: <?= esc($candidato['id']) ?></p>
                <p>Nome: <?= esc($candidato['nome']) ?></p>
                <p>Email: <?= esc($candidato['email']) ?></p>
                <p>Telefone: <?= esc($candidato['telefone']) ?></p>
                <p>Mensagem: <?= esc($candidato['mensagem']) ?></p>
                <p>Vaga ID: <?= esc($candidato['vaga_id']) ?></p>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <!-- Candidatura -->
        <div class="panel-item">
          <h2>Candidatura</h2>
          <!-- Formulário para candidatura -->
          <form id="candidaturaForm" action="<?= site_url('RecrutamentoController/candidatura') ?>" method="post">
            <input type="text" name="vaga_id" placeholder="ID da vaga">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="telefone" placeholder="Telefone">
            <textarea name="mensagem" placeholder="Mensagem"></textarea>
            <button type="submit">Enviar candidatura</button>
          </form>
        </div>
      </section>
    </main>
    <!-- Rodapé -->
=======
        <div class="panel-item">
       <!-- Adicionar vaga -->
<div class="panel-item">
    <h2>Adicionar vaga</h2>
    <form id="addVagaForm" action="<?= site_url('RecrutamentoController/adicionarVaga') ?>" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" placeholder="Título da vaga" required>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" placeholder="Descrição da vaga" required></textarea>

        <label for="requisitos">Requisitos:</label>
        <textarea id="requisitos" name="requisitos" placeholder="Requisitos da vaga" required></textarea>

        <button type="submit">Adicionar vaga</button>
    </form>
</div>


<!-- Atualizar vaga -->
<div class="panel-item">
    <h2>Atualizar vaga</h2>
    <form id="updateVagaForm" action="<?= site_url('RecrutamentoController/atualizarVaga') ?>" method="post">

        <input type="text" id="vagaIdUpdate" name="id" placeholder="ID da vaga">
        <input type="text" name="titulo" placeholder="Título">
        <textarea name="descricao" placeholder="Descrição"></textarea>
        <textarea name="requisitos" placeholder="Requisitos"></textarea>
        <button type="submit">Atualizar vaga</button>
    </form>
</div>




<!-- Remover vaga -->
<div class="panel-item">
    <h2>Remover vaga</h2>
    <form id="removeVagaForm" action="<?= site_url('RecrutamentoController/removerVaga') ?>" method="post">
        <input type="text" id="vagaId" name="id" placeholder="ID da vaga">
        <button type="submit">Remover vaga</button>
    </form>
</div>

<?php if (session()->has('success')): ?>
    <div class="success-message">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>




        

        <!-- Visualizar candidato -->
<div class="panel-item">
    <h2>Visualizar candidato</h2>
    <form id="viewCandidateForm" action="<?= site_url('RecrutamentoController/visualizarCandidato') ?>" method="get">

    <input type="text" id="candidateId" name="id" placeholder="ID do candidato">
    <button type="submit">Visualizar candidato</button>
</form>

<div id="dadosCandidato">
    <?php if (isset($candidato)): ?>
        <div>
            <h2>Dados do Candidato</h2>
            <p>ID: <?= esc($candidato['id']) ?></p>
            <p>Nome: <?= esc($candidato['nome']) ?></p>
            <p>Email: <?= esc($candidato['email']) ?></p>
            <p>Telefone: <?= esc($candidato['telefone']) ?></p>
            <p>Mensagem: <?= esc($candidato['mensagem']) ?></p>
            <p>Vaga ID: <?= esc($candidato['vaga_id']) ?></p>
        </div>
    <?php endif; ?>
</div>

<div class="panel-item">
    <h2>Candidatura</h2>
    <form id="candidaturaForm" action="<?= site_url('RecrutamentoController/candidatura') ?>" method="post">
        <input type="text" name="vaga_id" placeholder="ID da vaga">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="telefone" placeholder="Telefone">
        <textarea name="mensagem" placeholder="Mensagem"></textarea>
        <button type="submit">Enviar candidatura</button>
    </form>
</div>


      </section>
    </main>
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
    <footer>
      <p>&copy; JobSide. Todos os direitos reservados.</p>
    </footer>
  </div>
<<<<<<< HEAD
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fetch-polyfill@0.8.2/fetch.min.js"></script>
  <script src="/paginas/public/pagina2.js"></script>
=======
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fetch-polyfill@0.8.2/fetch.min.js"></script>
<script src="/paginas/public/pagina2.js"></script>

>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
</body>
</html>
