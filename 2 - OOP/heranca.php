<?php

// Criando classe Pai

class Pai {
    protected function mensagem($nome){
        echo "Olá, $nome!";
    }
}

// Criando a classe filha

class Filha extends Pai {

    // Criando um construtor
    public function __construct(public $nome){

        // Chamando o método mensagem da classe Pai

        Pai::mensagem($this->nome);
    }
}

// Chamando o método em um novo objeto

$fala = new Filha("Rubem");


