<?php
<<<<<<< HEAD
=======

>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
namespace App\Models;

use CodeIgniter\Model;

class CandidatoModel extends Model
{
<<<<<<< HEAD
    // Definindo a tabela do banco de dados
    protected $table = 'candidatos';
    
    // Definindo a chave primária da tabela
    protected $primaryKey = 'id';
    
    // Definindo os campos permitidos para inserção
    protected $allowedFields = ['nome', 'email', 'telefone', 'mensagem', 'vaga_id', 'teste_atribuido', 'perfil_atualizado'];

    // Função para buscar os detalhes de um candidato pelo ID
    public function getCandidato($id)
    {
        return $this->where('id', $id)->first(); // Buscando um candidato pelo ID
    }

    // Função para adicionar uma nova candidatura
    public function adicionarCandidatura($dados)
    {
        return $this->insert($dados); // Inserindo os dados da candidatura no banco
=======
    protected $table = 'candidatos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'email', 'telefone', 'mensagem', 'vaga_id', 'teste_atribuido', 'perfil_atualizado'];

    public function getCandidato($id)
    {
        return $this->where('id', $id)->first();
    }

    public function adicionarCandidatura($dados)
    {
        return $this->insert($dados);
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
    }
}
