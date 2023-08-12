<?php
namespace App\Controllers;

use App\Models\CandidatoModel;
use App\Models\VagaModel;
use App\Models\TesteModel;
use App\Models\MensagemModel;
use App\Models\CandidaturaModel;
use App\Models\TesteCandidato;
use CodeIgniter\Controller;
use CodeIgniter\Session\Session;

class RecrutamentoController extends Controller
{
    protected $session;
    protected $helpers = ['form', 'url'];

    private $vagaModel;
    private $testeModel;
    private $mensagemModel;
    private $candidaturaModel;
    private $testeCandidato;
    private $candidatoModel;

    public function __construct()
    {
        $this->vagaModel = model('VagaModel');
        $this->testeModel = model('TesteModel');
        $this->mensagemModel = model('MensagemModel');
        $this->candidaturaModel = model('CandidaturaModel');
        $this->testeCandidato = model('TesteCandidato');
        $this->candidatoModel = model('CandidatoModel');
        $this->session = \Config\Services::session();

    }
  
    public function pagina2()
    {
        $data['vagas'] = $this->vagaModel->findAll();
        $data['numero_vagas'] = $this->vagaModel->where('status', 'Aberta')->countAllResults();
    
        return view('pagina2', $data);
    }
    

    public function atribuirTeste()
    {
        $data = [
            'candidato_id' => $this->request->getPost('candidato_id'),
            'teste_id' => $this->request->getPost('teste_id')
        ];

        if (!empty($data['candidato_id']) && !empty($data['teste_id'])) {
            $this->testeModel->save($data);
            return redirect()->to('/testeAtribuido');
        } else {
            // Handle error here
        }
    }

    public function enviarMensagem()
    {
        $mensagemModel = new MensagemModel();
        $data = [
            'candidato_id' => $this->request->getPost('candidato_id'),
            'mensagem' => $this->request->getPost('mensagem')
        ];
        $mensagemModel->save($data);
        return redirect()->to('/mensagemEnviada');
    }

    public function adicionarVaga()
{
    $titulo = $this->request->getPost('titulo');
    $descricao = $this->request->getPost('descricao');
    $requisitos = $this->request->getPost('requisitos');

    $data = [
        'titulo' => $titulo,
        'descricao' => $descricao,
        'requisitos' => $requisitos,
        'status' => 'Aberta'
    ];

    $vagaModel = new VagaModel();
    $vagaModel->adicionarVaga($data);

    // Redirecionar para a página2 ou para outra página de confirmação
    return redirect()->to('pagina2');
}

    
public function atualizarVaga()
{
    $vagaId = $this->request->getPost('id');

    if ($vagaId) {
        $vagaModel = new VagaModel();
        $vaga = $vagaModel->find($vagaId);

        if ($vaga) {
            $data = [
                'titulo' => $this->request->getPost('titulo'),
                'descricao' => $this->request->getPost('descricao'),
                'requisitos' => $this->request->getPost('requisitos')
            ];

            unset($data['id']); // Remover o campo 'id' dos dados

            $vagaModel->atualizarVaga($vagaId, $data);
            return redirect()->to('pagina2');
        } else {
            // Lógica para lidar com a vaga inexistente
            return redirect()->to('/erro');
        }
    } else {
        // Lógica para lidar com o ID da vaga ausente
        return redirect()->to('/erro');
    }
}





    public function removerVaga($id = null)
    {
        if ($id != null) {
            $vagaModel = new VagaModel();
            $vagaModel->removerVaga($id);
    
            // Adicionar mensagem flash de sucesso
            session()->setFlashdata('success', 'Vaga removida com sucesso.');
    
            return redirect()->to('pagina2'); // Redirecionar para a mesma página
        } else {
            // Lógica para lidar com o ID da vaga ausente
            return redirect()->to('/erro');
        }
    }
    
    

    public function visualizarCandidato($id = null)
    {
        if ($id != null) {
            $candidato = $this->candidatoModel->getCandidato($id);
            if ($candidato) {
                return $this->response->setJSON($candidato); // Retorna os dados do candidato como uma resposta JSON
            } else {
                return $this->response->setJSON(['error' => 'Candidato não encontrado']); // Retorna um JSON com o erro caso o candidato não seja encontrado
            }
        }
    
        return $this->response->setJSON(['error' => 'ID do candidato não fornecido']); // Retorna um JSON com o erro caso o ID não seja fornecido
    }
  

   
    public function candidatura()
    {
        $candidatoModel = new CandidatoModel();
        $data = [
            'vaga_id' => (int) $this->request->getPost('vaga_id'),
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'mensagem' => $this->request->getPost('mensagem')
        ];
    
        // Recupera os IDs das vagas disponíveis do banco de dados
        $vagaModel = new VagaModel();
        $listaIdsVagas = array_column($vagaModel->select('id')->findAll(), 'id');
    
        if (in_array($data['vaga_id'], $listaIdsVagas)) {
            $candidatoModel->insert($data);
    
            // Define a mensagem de candidatura enviada na sessão
            $this->session->setFlashdata('mensagemCandidatura', 'Candidatura enviada com sucesso.');
    
            return redirect()->to('pagina2');
        } else {
            // Caso o ID de vaga fornecido não esteja na lista de IDs de vagas existentes
            $this->session->setFlashdata('erroCandidatura', 'Digite um ID de vaga válido.');
    
            // Redireciona de volta para a página anterior
            return redirect()->back();
        }
    }
    
    
    


    
   

    
    
    
}

    
