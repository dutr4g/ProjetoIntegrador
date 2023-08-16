<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // Definindo a tabela do banco de dados
    protected $table = 'users';
    
    // Definindo a chave primária da tabela
    protected $primaryKey = 'id';
    
    // Definindo os campos permitidos para inserção
    protected $allowedFields = ['username', 'password'];

    // Função para criar uma nova conta de usuário
    public function criarConta($username, $password)
    {
        // Criando um array de dados para inserção no banco
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        // Inserindo os dados no banco
        return $this->insert($data);
    }

    // Função para verificar as credenciais do usuário
    public function verifyCredentials($username, $password)
    {
        // Buscando o usuário pelo nome de usuário
        $user = $this->where('username', $username)->first();

        // Verificando se o usuário foi encontrado e a senha é válida
        if ($user && password_verify($password, $user['password'])) {
            return $user; // Retorna o usuário encontrado
        }

        return null; // Retorna null se as credenciais não forem válidas
    }

    // Outros métodos do modelo, se necessário
}
