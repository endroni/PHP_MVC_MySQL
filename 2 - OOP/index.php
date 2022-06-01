<?php

// incluindo arquivos
include "exemplo.php";
include "outroExemplo.php";

// namespace Exemplo
$exemplo = new Exemplo\Exemplo();
$exemplo->saudacao();

// namespace outroExemplo
$outroExemplo = new outroExemplo\Exemplo();
$outroExemplo->saudacao();