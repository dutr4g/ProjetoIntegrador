<?php
namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $session;
    protected $userModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
    }

    // Função de login
    public function login()
    {
        if ($this->request->getMethod() == 'post') {
            // Obter dados do formulário
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Verificar credenciais no banco de dados
            $user = $this->userModel->verifyCredentials($username, $password);

            if ($user) {
                // Login bem-sucedido, redirecionar para a página 2
                $this->session->set('logged_in', TRUE);
                $this->session->set('user_id', $user['id']); // Armazenar ID do usuário para uso futuro
                return redirect()->to('/pagina2');
            } else {
                // Credenciais inválidas, exibir mensagem de erro
                $data['error_message'] = 'Credenciais inválidas!';
                return view('login', $data);
            }
        }

        // Carregar a view do formulário de login
        return view('login');
    }

    // Função de logout
    public function logout()
    {
        $this->session->destroy(); // Encerrar a sessão
        return redirect()->to('/login'); // Redirecionar para a página de login
    }
    
    // Função para criar uma nova conta de usuário
    public function criarConta()
    {
        if ($this->request->getMethod() == 'post') {
            // Obter dados do formulário
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Criptografar a senha
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Inserir dados no banco de dados
            $this->userModel->insert([
                'username' => $username,
                'password' => $hashedPassword
            ]);

            // Redirecionar para a página de login após criar a conta
            return redirect()->to('/login');
        }

        // Carregar a view de criação de conta
        return view('criar_conta');
    }

    // Função para verificar se o usuário está logado
    private function isLoggedIn()
    {
        return $this->session->get('logged_in');
    }

    // Outras funções relacionadas à autenticação, como recuperação de senha, podem ser adicionadas aqui
}
