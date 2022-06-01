<?php

class Cliente{
    public function __construct(public $nome, protected $cpf, public $idade){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
    }

    // Método acessor
    public function getCpf() {
        return $this->cpf;
    }

    // Método modificador
    public function setCpf($novo_cpf){
        $this->cpf = $novo_cpf;
    }

}

// Criando um objeto
$cliente1 = new Cliente("Pedro", "999.999.999-99", 40);

// Imprimindo dados
echo "Nome: $cliente1->nome <br> Idade: $cliente1->idade <br>";

// Acessando um atributo protegido com um método acessor get
$cpf = $cliente1->getCpf();
echo "CPF: $cpf <br>";

// Alterando um atributo protegico com o método modificador set
$cliente1->setCpf("888.888.888-88");
$cpf = $cliente1->getCpf();
echo "CPF: $cpf <br>";


