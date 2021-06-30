<?php

require __DIR__."/vendor/autoload.php";

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/';

$route = new App\Router($method, $path);

$route->get('/ola-{nome}', function ($params) { return "Bem vindo(a) ".$params[1]; });

$route->get('/', 'App\Controller\HomeController::index');

$route->get('/clientes', 'App\Controller\ClientesController::index');

$route->get('/clientes/criar', 'App\Controller\ClientesController::criar');

$route->post('/clientes/salvar', 'App\Controller\ClientesController::salvar');

$route->get('/clientes/alterar/{id}', 'App\Controller\ClientesController::alterar');

$route->get('/clientes/excluir/{id}', 'App\Controller\ClientesController::excluir');

$route->get('/clientes/visualizar/{id}', 'App\Controller\ClientesController::visualizar');

$route->post('/clientes/editar/{id}', 'App\Controller\ClientesController::editar');

$route->post('/clientes/remover/{id}', 'App\Controller\ClientesController::remover');

$route->get('/servicos', 'App\Controller\ServicosController::index');

$route->get('/servicos/criar', 'App\Controller\ServicosController::criar');

$route->post('/servicos/salvar', 'App\Controller\ServicosController::salvar');

$route->get('/servicos/alterar/{id}', 'App\Controller\ServicosController::alterar');

$route->get('/servicos/excluir/{id}', 'App\Controller\ServicosController::excluir');

$route->get('/servicos/visualizar/{id}', 'App\Controller\ServicosController::visualizar');

$route->post('/servicos/editar/{id}', 'App\Controller\ServicosController::editar');

$route->post('/servicos/remover/{id}', 'App\Controller\ServicosController::remover');

$route->get('/agenda', 'App\Controller\AgendaController::index');

$route->get('/agenda/criar', 'App\Controller\AgendaController::criar');

$route->post('/agenda/salvar', 'App\Controller\AgendaController::salvar');

$route->get('/agenda/alterar/{id}', 'App\Controller\AgendaController::alterar');

$route->get('/agenda/excluir/{id}', 'App\Controller\AgendaController::excluir');

$route->get('/agenda/visualizar/{id}', 'App\Controller\AgendaController::visualizar');

$route->post('/agenda/editar/{id}', 'App\Controller\AgendaController::editar');

$route->post('/agenda/remover/{id}', 'App\Controller\AgendaController::remover');

$result = $route->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

echo $result($route->getParams());