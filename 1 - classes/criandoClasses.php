<?php
// classe
class BemVindo {

    //Propriedade
    public $nome = 'Rubem';

    // Método
    public function saudacao() {
        echo "Olá ".$this->nome.'<br>';
    }
}

// cria uma nova instancia, um objeto
$a = new BemVindo();

// ativa o método de saudação
$a->saudacao();

// Criando um novo objeto
$b = new BemVindo();

// alterando uma propriedade
$b->nome = 'Cândido';

// ativando o método de saudação para a variável $b
$b->saudacao();