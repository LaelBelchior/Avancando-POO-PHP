<?php

class Titular extends Pessoa{

    private Endereco $endereco;

    public function __construct(string $nome, string $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this -> endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this -> endereco;
    }
    
    public function alteraNome(string $novoNome): void
    {
        $this -> validaNome($novoNome);
        $this -> nome = $novoNome;
    }

}