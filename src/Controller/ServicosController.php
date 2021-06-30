<?php

namespace App\Controller;

use App\Model\DAO\ServicosDAO;
use App\Model\Domain\Servico;
use http\Env\Request;

class ServicosController
{

    public static function index()
    {
        $servicosDAO = new ServicosDAO();
        $resultado = $servicosDAO->consultar();
        require '../src/View/Servicos/index.php';
    }

    public static function criar()
    {
        $servicosDAO = new ServicosDAO();
        $servicos = $servicosDAO->consultar();
        require '../src/View/Servicos/criar.php';
    }

    public static function alterar($params)
    {
        $id = $params[1];
        $servicosDAO = new ServicosDAO();
        $resultado = $servicosDAO->consultarPorId($id);
        require '../src/View/Servicos/alterar.php';
    }

    public static function excluir($params)
    {
        $id = $params[1];
        $servicosDAO = new ServicosDAO();
        $resultado = $servicosDAO->consultarPorId($id);
        require '../src/View/Servicos/excluir.php';
    }

    public static function visualizar($params)
    {
        $id = $params[1];
        $servicosDAO = new ServicosDAO();
        $resultado = $servicosDAO->consultarPorId($id);
        require '../src/View/Servicos/visualizar.php';
    }

    public static function salvar()
    {
        $servico = new Servico(0, $_POST['nome'], floatval($_POST['preco']));
        $servicosDAO = new ServicosDAO();
        if ($servicosDAO->inserir($servico)){
            $sucesso = "Registro inserido com sucesso!";
        } else{
            $falha = "Erro ao inserir o registro!";
        }
        $resultado = $servicosDAO->consultar();
        require '../src/View/Servicos/index.php';
    }

    public static function editar($params)
    {
        $servico = new Servico($params[1], $_POST['descricao'], $_POST['preco']);
        $servicosDAO = new ServicosDAO();
        if ($servicosDAO->alterar($servico)){
            $sucesso = "Registro alterado com sucesso!";
        } else{
            $falha = "Erro ao alterar o registro!";
        }
        $resultado = $servicosDAO->consultar();
        require '../src/View/Servicos/index.php';
    }

    public static function remover($params)
    {
        $servicosDAO = new ServicosDAO();
        if ($servicosDAO->excluir($params[1])){
            $sucesso = "Registro excluído com sucesso!";
        } else{
            $falha = "Erro ao excluir o registro!";
        }
        $resultado = $servicosDAO->consultar();
        require '../src/View/Servicos/index.php';
    }

}

