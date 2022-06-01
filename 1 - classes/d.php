<?php

 // classe
 class BemVindo{
    
     // propriedade
     public $nome = 'pessoa';
    
     // método
     public function saudacao() {
     echo "Olá ".$this->nome;
     }
    
     }
    
    
     // cria uma nova instância
     $a = new BemVindo();
    
     // ativa o método de saudação
     $a->saudacao();

     