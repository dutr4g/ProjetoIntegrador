<?php
namespace App\Controllers;

use App\Models\UserModel;

// class LoginController extends BaseController
{
   // public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Verificar as credenciais do usuário
        $userModel = new UserModel();
        $user = $userModel->verifyCredentials($username, $password);

        if ($user) {
            // Login bem-sucedido, redirecionar para a página 2
            return redirect()->to('pagina2');
        } else {
            // Credenciais inválidas, redirecionar para a página de login com mensagem de erro
            return redirect()->to('login')->with('error', 'Credenciais inválidas');
        }

   // public function criarConta()
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
}
