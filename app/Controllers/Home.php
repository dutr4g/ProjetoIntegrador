<?php
namespace App\Controllers;

class Home extends BaseController
{
<<<<<<< HEAD
    // Função para exibir a página principal
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
    public function principal()
    {
        return view('principal');
    }

<<<<<<< HEAD
    // Função para exibir a página de login
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
    public function login()
    {
        return view('login');
    }

<<<<<<< HEAD
    // Função para exibir a página de criação de conta
=======
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
    public function criarConta()
    {
        return view('criar-conta');
    }
}

class LoginController extends BaseController
{
<<<<<<< HEAD
    // Função para autenticação do usuário no login
    public function login()
    {
        // Lógica para autenticação do usuário
        // Aqui você pode verificar as credenciais do usuário no banco de dados
=======
    public function login()
    {
        // Lógica para autenticação do usuário
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01

        // Exemplo de resposta em formato JSON
        $response = [
            'success' => true,
            'message' => 'Login bem-sucedido'
        ];

        return $this->response->setJSON($response);
    }

<<<<<<< HEAD
    // Função para criar uma nova conta de usuário
    public function criarConta()
    {
        // Lógica para criar uma nova conta de usuário
        // Aqui você pode inserir os dados do usuário no banco de dados
=======
    public function criarConta()
    {
        // Lógica para criar uma nova conta de usuário
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01

        // Exemplo de resposta em formato JSON
        $response = [
            'success' => true,
            'message' => 'Conta criada com sucesso'
        ];

        return $this->response->setJSON($response);
    }
}
