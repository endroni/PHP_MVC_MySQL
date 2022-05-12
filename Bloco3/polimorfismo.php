<?php

// Classe pai 
abstract class Carro{
    abstract protected function reabastecer();
}

// Classe filho 
class Eletrico extends Carro{
    public function __construct(){
        echo 'Carro elétrico, ';
    }

    // sobrepondo a função reabastecer
    public function reabastecer(){
        echo 'reabasteça ligando na tomada <br>';
    }
}

// Instanciando objeto e acessando método
$eletrico = new Eletrico();
$eletrico->reabastecer();

// Classe irmão 
class Combustao extends Carro{
    //método construtor
    public function __construct(){
        echo 'Carro a combustão, ';
    }

    // Demonstrando o polimorfismo, sobrepondo a função reabastecer
    public function reabastecer(){
        echo 'reabasteça com combustível <br>';
    }
}

// Instanciando objeto e acessando método
$combustao = new Combustao();
$combustao->reabastecer();