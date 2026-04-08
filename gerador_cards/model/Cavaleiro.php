<?php

class Cavaleiro {
    private string $nome;
    private int $idade;
    private string $armadura;
    private string $poder;
    private string $constelacao;
    private string $descricao;
    private string $link;

    public function __construct(string $nome, int $idade, string $armadura, string $poder, string $constelacao, string $descricao, string $link){
        $this->nome = $nome;
        $this->idade = $idade;  
        $this->armadura = $armadura; 
        $this->poder = $poder; 
        $this->constelacao = $constelacao;
        $this->descricao = $descricao;
        $this->link = $link;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of armadura
     */
    public function getArmadura(): string
    {
        return $this->armadura;
    }

    /**
     * Set the value of armadura
     */
    public function setArmadura(string $armadura): self
    {
        $this->armadura = $armadura;

        return $this;
    }

    /**
     * Get the value of poder
     */
    public function getPoder(): string
    {
        return $this->poder;
    }

    /**
     * Set the value of poder
     */
    public function setPoder(string $poder): self
    {
        $this->poder = $poder;

        return $this;
    }

    /**
     * Get the value of constelacao
     */
    public function getConstelacao(): string
    {
        return $this->constelacao;
    }

    /**
     * Set the value of constelacao
     */
    public function setConstelacao(string $constelacao): self
    {
        $this->constelacao = $constelacao;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }
}


?>
