<?php

namespace App\Model\Domain;

class Agenda
{

    private int $id;
    private int $id_clientes;
    private int $id_servicos;
    private string $dia;
    private string $hora;

    /**
     * Agenda constructor.
     * @param int $id
     * @param Cliente $cliente
     * @param Servico $servico
     * @param string $dia
     * @param string $hora
     */
    public function __construct(int $id, $cliente, $servico, string $dia, string $hora)
    {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->servico = $servico;
        $this->dia = $dia;
        $this->hora = $hora;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param Cliente $cliente
     */
    public function setCliente($cliente): void
    {
        $this->cliente = $cliente;
    }

    /**
     * @return Servico
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * @param Servico $servico
     */
    public function setServico($servico): void
    {
        $this->servico = $servico;
    }

    /**
     * @return string
     */
    public function getDia(): string
    {
        return $this->dia;
    }

    /**
     * @param string $dia
     */
    public function setDia(string $dia): void
    {
        $this->dia = $dia;
    }

    /**
     * @return string
     */
    public function getHora(): string
    {
        return $this->hora;
    }

    /**
     * @param string $hora
     */
    public function setHora(string $hora): void
    {
        $this->hora = $hora;
    }
}

