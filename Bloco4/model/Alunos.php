<?php
/* MODEL ALUNOS 
    Essa camada é responsável por comunicar com o banco de dados, 
    mais especificamente à tabela aluno*/

class Alunos{
    function listar(){
        // listar os alunos
        $dados = [
            ['id'=>1, 'nome' => 'João'],
            ['id'=>2,'nome'=>'Marta']
        ];

        return $dados;        
    }

    function buscar(){
        // buscar os alunos de acordo com o id
        echo "Buscando estudantes";
    }

    function salvar(){
        // salvar os alunos no banco de dados
        echo "Salvando dados do estudante";
    }

    function atualizar(){
        // atualizar dados de alunos
        echo "Atualizando dados do estudante";
    }

    function deletar(){
        // deletar alunos
        echo "Deletando dados do estudante";
    }
}
