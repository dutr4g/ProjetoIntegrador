<?php
namespace App\Controllers;

use App\Models\UserModel;

<<<<<<< HEAD
// class LoginController extends BaseController
{
   // public function login()
=======
class LoginController extends BaseController
{
    public function login()
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
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
<<<<<<< HEAD

   // public function criarConta()
=======
    }

    public function criarConta()
>>>>>>> 51c37fe912e8f9ea43f407f114379b7b6eb5cd01
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
