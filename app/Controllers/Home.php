<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function principal()
    {
        return view('principal');
    }

    public function login()
    {
        return view('login');
    }

    public function criarConta()
    {
        return view('criar-conta');
    }
}

class LoginController extends BaseController
{
    public function login()
    {
        // Lógica para autenticação do usuário

        // Exemplo de resposta em formato JSON
        $response = [
            'success' => true,
            'message' => 'Login bem-sucedido'
        ];

        return $this->response->setJSON($response);
    }

    public function criarConta()
    {
        // Lógica para criar uma nova conta de usuário

        // Exemplo de resposta em formato JSON
        $response = [
            'success' => true,
            'message' => 'Conta criada com sucesso'
        ];

        return $this->response->setJSON($response);
    }
}
