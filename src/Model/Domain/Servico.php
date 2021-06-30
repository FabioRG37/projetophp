<?php

namespace App\Model\Domain;

class Servico
{

    private int $id;
    private string $descricao;
    private float $preco;

    public function __construct(int $id, string $descricao, float $preco)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

}

