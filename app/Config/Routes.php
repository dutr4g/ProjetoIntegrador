<?php

namespace Config;

use CodeIgniter\Config\Services;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('principal');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::principal');
$routes->get('login', 'Home::login');
$routes->get('criar-conta', 'Home::criarConta');

// Rotas atualizadas para autenticação
$routes->post('login', 'Auth::login');
$routes->post('criar-conta', 'Auth::criarConta');
$routes->post('logout', 'Auth::logout');


$routes->get('pagina2', 'RecrutamentoController::pagina2');
$routes->get('testar_conexao', 'Home::testar_conexao');

// Rota para visualizar candidato
$routes->get('RecrutamentoController/visualizarCandidato/([0-9]+)', 'RecrutamentoController::visualizarCandidato/$1');

// Rotas para as outras ações do RecrutamentoController
$routes->post('RecrutamentoController/adicionarVaga', 'RecrutamentoController::adicionarVaga');
$routes->post('RecrutamentoController/atualizarVaga', 'RecrutamentoController::atualizarVaga');
$routes->post('RecrutamentoController/removerVaga/(:num)', 'RecrutamentoController::removerVaga/$1');
$routes->get('buscarCandidatos/(:num)', 'RecrutamentoController::buscarCandidatos/$1');
$routes->post('RecrutamentoController/candidatura', 'RecrutamentoController::candidatura');
$routes->get('getNumeroVagasEmAberto', 'RecrutamentoController::getNumeroVagasEmAberto');
$routes->post('enviarMensagem', 'RecrutamentoController::enviarMensagem');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
