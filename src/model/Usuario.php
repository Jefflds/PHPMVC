<?php

namespace App\model;

class Usuario{

    private $nome;
    private $idade;
    private $email;

    function __construct(string $nome, int $idade, string $email) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    public function getNome(){
        return $this->nome; 
    }
    
    public function getIdade(){
        return $this->idade; 
    }
    
    public function getEmail(){
        return $this->email;
    }

}