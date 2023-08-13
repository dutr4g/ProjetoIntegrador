<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Authenticate implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Se o usuário não estiver logado, redirecione-o para a página de login
        if (! session()->get('logged_in')) {
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Este método não é necessário para este filtro, então deixamos vazio
    }
}
