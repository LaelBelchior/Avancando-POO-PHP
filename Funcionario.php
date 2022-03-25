<?php

class Funcionario extends Pessoa{
 
    private string $cargo;

    public function __construct(string $nome, string $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this -> cargo = $cargo;
    }
    
    public function retornaCargo(): string
    {
        return $this -> cargo;
    }
    
}