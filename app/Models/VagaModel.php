<?php
namespace App\Models;

use CodeIgniter\Model;

class VagaModel extends Model
{
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
    }
}
