<?php

class Conta {
    // atributos com visibilidades variadas
    public $numeroConta = '555';
    protected $cpf = '07876';
    private $codigoSeguranca = '765';

    // método 
    function mensagem() {
        echo $this->numeroConta.'<br>';
        echo $this->cpf.'<br>';
        echo $this->codigoSeguranca.'<br>';
    }
}

// Instanciando
$conta1 = new Conta();

// Invocando a classe
$conta1->mensagem();

// Atributo publico
echo $conta1->numeroConta;

// Negando serviços ao imprimir atributos protegido
// Retire o comentário da linha abaixo
// echo $conta1->cpf;

// Negando serviços ao imprimir atributos protegido
// Retire o comentário da linha abaixo
//echo $conta1->codigoSeguranca;
