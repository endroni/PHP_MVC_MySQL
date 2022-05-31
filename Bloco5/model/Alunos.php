<?php

class Alunos extends Model{
    function listar(){
        // listar os alunos
        $sql = $this->pdo->prepare("select * from alunos");
        $sql->execute();
        
        return $sql;
    }

    function buscar(){
        // buscar os alunos de acordo com o id
        echo "Buscando estudantes";
    }

    function salvar($nome){
        // salvar os alunos no banco de dados
        try{
            // comando SQL
            $sql = $this->pdo->prepare("INSERT INTO alunos (nome) VALUES(?)");

            //executando o comando => $nome substituirá o símbolo "?"
            $sql->execute([$nome]);

            // Dados salvos com sucesso
            echo "<small>Linhas inseridas na base de dados:"
                .$sql->rowCount()."</small>";
        } catch(PDOException $e){
            // um erro ocorreu
            echo 'Erro: ' . $e->getMessage();
        }
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
