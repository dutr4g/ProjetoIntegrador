<?php
namespace App\Controllers;

class Home extends BaseController
{
    // Função para exibir a página principal
    public function principal()
    {
        return view('principal');
    }

    // Função para exibir a página de login
    public function login()
    {
        return view('login');
    }

    // Função para exibir a página de criação de conta
    public function criarConta()
    {
        return view('criar-conta');
    }
}

class LoginController extends BaseController
{
    // Função para autenticação do usuário no login
    public function login()
    {
        // Lógica para autenticação do usuário
        // Aqui você pode verificar as credenciais do usuário no banco de dados

        // Exemplo de resposta em formato JSON
        $response = [
            'success' => true,
            'message' => 'Login bem-sucedido'
        ];

        return $this->response->setJSON($response);
    }

    // Função para criar uma nova conta de usuário
    public function criarConta()
    {
        // Lógica para criar uma nova conta de usuário
        // Aqui você pode inserir os dados do usuário no banco de dados

        // Exemplo de resposta em formato JSON
        $response = [
            'success' => true,
            'message' => 'Conta criada com sucesso'
        ];

        return $this->response->setJSON($response);
    }
}
