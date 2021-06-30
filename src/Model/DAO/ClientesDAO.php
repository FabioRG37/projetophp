<?php


namespace App\Model\DAO;


use App\Model\Domain\Cliente;

class ClientesDAO
{

    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    private function antiInjection($attr,$html = true){
        // remove palavras que contenham sintaxe sql
        $attr = preg_replace(strtolower("/(from|select|insert|delete|where|drop table|show tables|\|--|\\\\)/"),"",$attr);
        if (!is_array($attr)) {
            $attr = trim($attr);//limpa espaços vazio
            $attr = strip_tags($attr);//tira tags html e php
            $attr = addslashes($attr);//Adiciona barras invertidas a uma string
        }
        return $attr;
    }

    public function inserir(Cliente $cliente)
    {
        try{
            //$sql = "INSERT INTO cliente (nome, dt_nasc, cpf) VALUES (:nome, :dt_nasc, :cpf)";
            $sql = "INSERT INTO clientes (nome, cpf, telefone, email, endereco, cidade, estado) VALUES (:nome, :cpf, :telefone, :email, :endereco, :cidade, :estado)";
            $c = $this->dao->getConexao()->prepare($sql);
            //$p->bindValue(":nome", $this->antiInjection($cliente->getNome()));
            //$p->bindValue(":dt_nasc", $this->antiInjection($cliente->getDtNasc()));
            //$p->bindValue(":cpf", $this->antiInjection($cliente->getCpf()));
            $c->bindValue(":nome", $this->antiInjection($cliente->getNome()));
            $c->bindValue(":cpf", $this->antiInjection($cliente->getCpf()));
            $c->bindValue(":telefone", $this->antiInjection($cliente->gettelefone()));
            $c->bindValue(":email", $this->antiInjection($cliente->getEmail()));
            $c->bindValue(":endereco", $this->antiInjection($cliente->getEndereco()));
            $c->bindValue(":cidade", $this->antiInjection($cliente->getCidade()));
            $c->bindValue(":estado", $this->antiInjection($cliente->getEstado()));
            return $c->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    public function alterar(Cliente $cliente)
    {
        try{
            $sql = "UPDATE clientes SET nome = :nome, cpf = :cpf, telefone = :telefone, email = :email, endereco = :endereco, cidade = :cidade, estado = :estado WHERE id = :id";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $this->antiInjection($cliente->getId()));
            $p->bindValue(":nome", $this->antiInjection($cliente->getNome()));
            $p->bindValue(":cpf", $this->antiInjection($cliente->getCpf()));
            $p->bindValue(":telefone", $this->antiInjection($cliente->getTelefone()));
            $p->bindValue(":email", $this->antiInjection($cliente->getEmail()));
            $p->bindValue(":endereco", $this->antiInjection($cliente->getEndereco()));
            $p->bindValue("cidade", $this->antiInjection($cliente->getCidade()));
            $p->bindValue(":estado", $this->antiInjection($cliente->getEstado()));
            return $p->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    public function excluir(int $id)
    {
        try{
            $sql = "DELETE FROM clientes WHERE id = :id";
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
            $sql = "SELECT * FROM clientes";
            return $this->dao->getConexao()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

    public function consultarPorId(int $id)
    {
        try{
            $sql = "SELECT * FROM clientes WHERE id = :id";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch(); //retorna em formato de array o resultado da consulta
        } catch (Exception $e){
            return 0;
        }
    }

}