<?php


namespace App\Controller;


use App\Model\DAO\ClientesDAO;
use App\Model\Domain\Cliente;
use http\Env\Request;

class ClientesController
{

    public static function index()
    {
        $clientesDAO = new ClientesDAO();
        $resultado = $clientesDAO->consultar();
        require '../src/View/Clientes/index.php';
    }

    public static function criar()
    {
        require '../src/View/Clientes/criar.php';
    }

    public static function salvar()
    {
        $cliente = new Cliente(0, strval($_POST['nome']), $_POST['cpf'], $_POST['telefone'], $_POST['email'], $_POST['endereco'], $_POST['cidade'], strval($_POST['estado']));
        $clientesDAO = new ClientesDAO();
        if($clientesDAO->inserir($cliente)){
            $sucesso = "Registro inserido com sucesso!";
        }else{
            $falha = "Erro ao inserir o registro!";
        }
        $resultado = $clientesDAO->consultar();
        ClientesController::index();
    }

    public static function alterar($params)
    {
        $id = $params[1];
        $clientesDAO = new ClientesDAO();
        $resultado = $clientesDAO->consultarPorId($id);
        require '../src/View/Clientes/alterar.php';
    }

    public static function excluir($params)
    {
        $id = $params[1];
        $clientesDAO = new ClientesDAO();
        $resultado = $clientesDAO->consultarPorId($id);
        require '../src/View/Clientes/excluir.php';
    }

    public static function visualizar($params)
    {
        $id = $params[1];
        $clientesDAO = new ClientesDAO();
        $resultado = $clientesDAO->consultarPorId($id);
        require '../src/View/Clientes/visualizar.php';
    }

    public static function editar($params)
    {
        $clientes = new Cliente($params[1], $_POST['nome'], $_POST['cpf'], $_POST['telefone'], $_POST['email'], $_POST['endereco'], $_POST['cidade'], $_POST['estado']);
        $clientesDAO = new ClientesDAO();
        if ($clientesDAO->alterar($clientes)){
            $sucesso = "Registro alterado com sucesso!";
        } else{
            $falha = "Erro ao alterar o registro!";
        }
        $resultado = $clientesDAO->consultar();
        ClientesController::index();
    }

    public static function remover($params)
    {
        $clientesDAO = new ClientesDAO();
        if ($clientesDAO->excluir($params[1])){
            $sucesso = "Registro excluído com sucesso!";
        } else{
            $falha = "Erro ao excluir o registro!";
        }
        ClientesController::index();
    }

}