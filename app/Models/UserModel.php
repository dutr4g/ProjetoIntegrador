<?php
<<<<<<< HEAD
=======

>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
<<<<<<< HEAD
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
=======
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];

    public function criarConta($username, $password)
    {
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

<<<<<<< HEAD
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
=======
        return $this->insert($data);
    }

    public function verifyCredentials($username, $password)
    {
        $user = $this->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
    }

    // Outros métodos do modelo, se necessário
}
