<?php
namespace App\Models;

use CodeIgniter\Model;

class VagaModel extends Model
{
<<<<<<< HEAD
    // Definindo a tabela do banco de dados
    protected $table = 'vagas';
    
    // Definindo a chave primária da tabela
    protected $primaryKey = 'id';
    
    // Definindo o tipo de retorno dos resultados
    protected $returnType = 'array';

    // Definindo os campos permitidos para inserção e atualização
    protected $allowedFields = ['titulo', 'descricao', 'requisitos', 'status'];

    // Função para adicionar uma nova vaga
    public function adicionarVaga($dados)
    {
        return $this->insert($dados); // Inserindo os dados no banco
    }

    // Função para atualizar uma vaga existente
    public function atualizarVaga($id, $dados)
    {
        return $this->update($id, $dados); // Atualizando os dados no banco
    }

    // Função para remover uma vaga pelo ID
    public function removerVaga($id)
    {
        return $this->delete($id); // Removendo a vaga do banco
    }

    // Função para buscar todas as vagas abertas
    public function getVagasAbertas()
    {
        return $this->where('status', 'Aberta')->findAll(); // Buscando todas as vagas com status "Aberta"
    }

    // Função para buscar os detalhes de uma vaga pelo ID
    public function getVaga($id)
    {
        return $this->find($id); // Buscando a vaga pelo ID
    }

    // Função para buscar todas as vagas
    public function getTodasVagas()
    {
        return $this->findAll(); // Buscando todas as vagas no banco
=======
    protected $table = 'vagas';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['titulo', 'descricao', 'requisitos', 'status'];

    public function adicionarVaga($dados)
    {
        return $this->insert($dados);
    }

    public function atualizarVaga($id, $dados)
    {
        return $this->update($id, $dados);
    }

    public function removerVaga($id)
    {
        return $this->delete($id);
    }

    public function getVagasAbertas()
    {
        return $this->where('status', 'Aberta')->findAll();
    }

    public function getVaga($id)
    {
        return $this->find($id);
    }

    public function getTodasVagas()
    {
        return $this->findAll();
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
    }
}
