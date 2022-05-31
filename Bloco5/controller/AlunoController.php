<?php

require 'model/Alunos.php'; // Não precisa especificar o caminho absoluto, porque quem irá buscar esse arquivo será o index.php

/**
 * Controlador Alunos
 */
class AlunoController{

    function listar(){

        // instancia o método alunos
        $Alunos = new Alunos();

        // busca todos os alunos
        $alunos = $Alunos->listar();

        // carrega a view alunos
        require 'view/aluno.php';
    }

    function inserir(){
        if(isset($_POST['nome'])){
            $Alunos = new Alunos();
            $aluno = $Alunos->salvar($_POST['nome']);
            $alunos = $Alunos->listar();

            header('Location: /');

        }
    }
}
 
