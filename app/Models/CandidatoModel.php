<?php

namespace App\Models;

use CodeIgniter\Model;

class CandidatoModel extends Model
{
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
    }
}
