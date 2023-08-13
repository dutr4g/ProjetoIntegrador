<?php 
namespace App\Models;
use CodeIgniter\Model;

class TesteCandidato extends Model
{
    protected $table = 'teste_candidato';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['teste_id', 'candidato_id'];

    public function atribuirTeste($dados)
    {
        return $this->insert($dados);
    }
}
?>
