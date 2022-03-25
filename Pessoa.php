<?php

class Pessoa {

    protected string $nome;
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this -> nome = $nome;
        $this -> cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this -> nome;
    }

    public function recuperaCpf(): string
    {
        return $this -> cpf;
    }

    protected function validaNome(string $nome)
    {
        if(strlen($nome) < 5){
            echo "O nome precisa ter mais de cinco caracteres.";
        }
    }
}