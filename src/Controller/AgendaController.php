<?php


namespace App\Controller;


use App\Model\DAO\AgendaDAO;
use App\Model\DAO\ClientesDAO;
use App\Model\DAO\ServicosDAO;
use App\Model\Domain\Agenda;
use App\Model\Domain\Cliente;
use App\Model\Domain\Servico;
use http\Env\Request;

class AgendaController
{

    public static function index()
    {
        $agendaDAO = new AgendaDAO();
        $resultado = $agendaDAO->consultar();
        require '../src/View/agenda/index.php';
    }

    public static function criar()
    {
        $clienteDAO = new ClientesDAO();
        $cliente = $clienteDAO->consultar();

        $servicoDAO = new ServicosDAO();
        $servico = $servicoDAO->consultar();
        require '../src/View/agenda/criar.php';
    }

    public static function alterar($params)
    {
        $id = $params[1];

        $clienteDAO = new ClientesDAO();
        $cliente = $clienteDAO->consultar();

        $servicoDAO = new ServicosDAO();
        $servico = $servicoDAO->consultar();

        $agendaDAO = new AgendaDAO();
        $resultado = $agendaDAO->consultarPorId($id);
        require '../src/View/agenda/alterar.php';
    }

    public static function excluir($params)
    {
        $id = $params[1];

        $clienteDAO = new ClientesDAO();
        $cliente = $clienteDAO->consultar();

        $servicoDAO = new ServicosDAO();
        $servico = $servicoDAO->consultar();

        $agendaDAO = new AgendaDAO();
        $resultado = $agendaDAO->consultarPorId($id);
        require '../src/View/agenda/excluir.php';
    }

    public static function visualizar($params)
    {
        $id = $params[1];

        $agendaDAO = new AgendaDAO();
        $resultado = $agendaDAO->consultarPorId($id);

        $clienteDAO = new ClientesDAO();
        $cliente = $clienteDAO->consultarPorId($resultado['id_clientes']);

        $servicoDAO = new ServicosDAO();
        $servico = $servicoDAO->consultarPorId($resultado['id_servicos']);

        require '../src/View/agenda/visualizar.php';
    }

    public static function salvar()
    {
        $clienteDAO = new ClientesDAO();
        $clientes = $clienteDAO->consultarPorId($_POST['cliente']);
        $servicoDAO = new ServicosDAO();
        $servicos = $servicoDAO->consultarPorId($_POST['servico']);

        $agenda = new Agenda(0, new Cliente($clientes['id'], '', '', '', '', '', '', ''), new Servico($servicos['id'], '', 0), $_POST['dia'], $_POST['hora']);
        $agendaDAO = new AgendaDAO();
        if ($agendaDAO->inserir($agenda)){
            $sucesso = "Registro inserido com sucesso!";
        } else{
            $falha = "Erro ao inserir o registro!";
        }
        $resultado = $agendaDAO->consultar();
        require '../src/View/agenda/index.php';
    }

    public static function editar($params)
    {
        $clienteDAO = new ClientesDAO();
        $clientes = $clienteDAO->consultarPorId($_POST['cliente']);
        $servicoDAO = new ServicosDAO();
        $servicos = $servicoDAO->consultarPorId($_POST['servico']);

        $agenda = new Agenda($params[1], new Cliente($clientes['id'], '', '', '', '', '', '', ''), new Servico($servicos['id'], '', 0), $_POST['dia'], $_POST['hora']);
        $agendaDAO = new AgendaDAO();
        if ($agendaDAO->alterar($agenda)){
            $sucesso = "Registro inserido com sucesso!";
        } else{
            $falha = "Erro ao inserir o registro!";
        }
        $resultado = $agendaDAO->consultar();
        require '../src/View/agenda/index.php';
    }

    public static function remover($params)
    {
        $agendaDAO = new AgendaDAO();
        if ($agendaDAO->excluir($params[1])){
            $sucesso = "Registro excluído com sucesso!";
        } else{
            $falha = "Erro ao excluir o registro!";
        }
        $resultado = $agendaDAO->consultar();
        require '../src/View/agenda/index.php';
    }

}

