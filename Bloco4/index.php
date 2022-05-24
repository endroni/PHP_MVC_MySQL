<?php
/*
    Simples Aplicação MVC com PHP
*/

/* 
$controller = 'AlunoControoller.php';
http://localhost/?controller=Aluno
*/

// Identifica os dados carregados pela URL
// ex. Alunos


if(isset($_GET['controller'])){
    $controller = $_GET['controller'].'controller';
} // o que fazer com o aluno
else{
    $controller = 'AlunoController';
}
if(isset($_GET['metodo'])){
    $metodo = $_GET['metodo'];
} // o que fazer com o aluno
else{
    $metodo = 'listar';
}

// Carrega o controlador selecionado pela URL
require_once 'controller/'.$controller.'.php';

// instancia um novo objeto
$site = new $controller(); // carrega o escopo atual
$site->$metodo();
