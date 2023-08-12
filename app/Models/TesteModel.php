<?php

namespace App\Models;

use CodeIgniter\Model;

class Testes_model extends Model
{
    protected $table = 'testes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['descricao'];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = null;

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    public function getTestesByVaga($vagaId)
    {
        return $this->where('vaga_id', $vagaId)->findAll();
    }

    // Adicione outras funções conforme necessário

    // ...
}
?>
