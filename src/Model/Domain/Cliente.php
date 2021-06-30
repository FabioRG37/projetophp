<?php


namespace App\Model\Domain;


class Cliente
{

    private int $id;
    private string $nome;
    private string $cpf;
    private string $telefone;
    private string $email;
    private string $endereco;
    private string $cidade;
    private string $estado;

    /**
     * Cliente constructor.
     * @param int $id
     * @param string $nome
     * @param string $cpf
     * @param string $telefone
     * @param string $email
     * @param string $endereco
     * @param string $cidade
     * @param string $estado
     */
    public function __construct(int $id, string $nome, string $cpf, string $telefone, string $email, string $endereco, string $cidade, string $estado)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->estado = $estado;
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
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     */
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * @return ing
     */
    public function getTelefone(): int
    {
        return $this->telefone;
    }

    /**
     * @param int $telefone
     */
    public function setTelefone(ing $telefone): void
    {
        $this->telefone = $telefone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**
     * @param string $endereco
     */
    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    /**
     * @return string
     */
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * @param string $cidade
     */
    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * @param string $estado
     */
    public function setEstado(string $estado): void
    {
        $this->estado = $estado;
    }

}