<?php

class X{
    public function saudacao($nome){
    echo "Olá, $nome!";
    }
}

class Y extends X{
    public function __construct(public $nome){
        X::saudacao($this->nome);
    }
    }

new Y("José");