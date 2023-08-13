<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function pagina2()
    {
        // Verificar se o usuário está autenticado
        if (!$this->isLoggedIn()) {
            // O usuário não está autenticado, redirecionar para a página de login ou exibir uma mensagem de erro
            return redirect()->to('login');
        }

        // Verificar se o usuário tem a autorização necessária para acessar a página "pagina2"
        if (!$this->hasAuthorization()) {
            // O usuário não tem autorização, exibir uma mensagem de erro ou redirecionar para uma página de acesso negado
            return redirect()->to('acesso-negado');
        }

        // O usuário está autenticado e tem autorização, exibir a página "pagina2"
        return view('pagina2');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Verificar as credenciais do usuário
        $userModel = new UserModel();
        $user = $userModel->verifyCredentials($username, $password);

        if ($user) {
            // Definir o status de autenticação do usuário na sessão
            $session = \Config\Services::session();
            $session->set('isLoggedIn', true);

            // Login bem-sucedido, redirecionar para a página 2
            return redirect()->to('pagina2');
        } else {
            // Credenciais inválidas, redirecionar para a página de login com mensagem de erro
            return redirect()->to('login')->with('error', 'Credenciais inválidas');
        }
    }

    public function criarConta()
    {
        // Salvar os dados do usuário no banco de dados
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $userModel->insert([
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);

        // Redirecionar para a página de login após criar a conta
        return redirect()->to('login');
    }

    public function auth()
    {
        // Verificar se o usuário está autenticado
        if (!$this->isLoggedIn()) {
            // O usuário não está autenticado, redirecionar para a página de login ou exibir uma mensagem de erro
            return redirect()->to('login');
        }

        // Verificar se o usuário tem a autorização necessária para acessar a página "pagina2"
        if (!$this->hasAuthorization()) {
            // O usuário não tem autorização, exibir uma mensagem de erro ou redirecionar para uma página de acesso negado
            return redirect()->to('acesso-negado');
        }

        // O usuário está autenticado e tem autorização, exibir a página "pagina2"
        return view('pagina2');
    }

    private function isLoggedIn()
    {
        $session = \Config\Services::session();
        return $session->isLoggedIn === true;
    }

    private function hasAuthorization()
    {
        // Implemente a lógica para verificar a autorização do usuário aqui
        return true; // Substitua com a lógica de verificação de autorização adequada
    }
}
