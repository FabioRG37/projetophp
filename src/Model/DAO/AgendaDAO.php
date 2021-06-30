<?php

namespace App\Model\DAO;

use App\Model\Domain\Agenda;

class AgendaDAO
{

    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    private function antiInjection($attr,$html = true){
        $attr = preg_replace(strtolower("/(from|select|insert|delete|where|drop table|show tables|\|--|\\\\)/"),
            "",$attr);
        if (!is_array($attr)) {
            $attr = trim($attr);
            $attr = strip_tags($attr);
            $attr = addslashes($attr);
        }
        return $attr;
    }

    public function inserir(Agenda $agenda)
    {
        try{
            $sql = "INSERT INTO agenda (id_clientes, id_servicos, dia, hora) VALUES (:id_clientes, :id_servicos, :dia, :hora)";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id_clientes", $this->antiInjection($agenda->getCliente()->getId()));
            $p->bindValue(":id_servicos", $this->antiInjection($agenda->getServico()->getId()));
            $p->bindValue(":dia", $this->antiInjection($agenda->getDia()));
            $p->bindValue(":hora", $this->antiInjection($agenda->getHora()));
            return $p->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    public function alterar(Agenda $agenda)
    {
        try{
            $sql = "UPDATE agenda SET dia = :dia, hora = :hora, id_clientes = :id_clientes, id_servicos = :id_servicos WHERE id = :id";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $this->antiInjection($agenda->getId()));
            $p->bindValue(":id_clientes", $this->antiInjection($agenda->getCliente()->getId()));
            $p->bindValue(":id_servicos", $this->antiInjection($agenda->getServico()->getId()));
            $p->bindValue(":dia", $this->antiInjection($agenda->getDia()));
            $p->bindValue(":hora", $this->antiInjection($agenda->getHora()));
            return $p->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    public function excluir(int $id)
    {
        try{
            $sql = "DELETE FROM agenda WHERE id = :id";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    public function consultar()
    {
        try{
            $sql = "SELECT * FROM agenda";
            return $this->dao->getConexao()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

    public function consultarPorId(int $id)
    {
        try{
            $sql = "SELECT * FROM agenda WHERE id = :id";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch (Exception $e){
            return 0;
        }
    }

}

