<?php

class B{

private $nome = "Pedro";
public function saudacao(){
echo "Olá, $this->nome";
}
}

$nome = "Carla";

$obj = new B("José");
echo $obj->saudacao();