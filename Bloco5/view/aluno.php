<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MVC com PHP</title>
    </head>
    <body>
        <!-- VIEW ALUNO.PHP -->
        <h1>Lista de alunos</h1>

        <form method="post" action="?metodo=inserir">
            <input type="text" name="nome" placeholder="Digite o nome">
            <input type="submit" name="enviar" value="Inserir">
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($alunos as $aluno){ ?>
                    <tr>
                        <td><?= $aluno['id']; ?></td>
                        <td><?= $aluno['nome']; ?></td>
                        <td>
                            <a href="?metodo=deletar&id=<?= $aluno['id']; ?>"> <!-- Forma reduzida para o comando echo -->
                            Deletar
                            </a>
                        </td>
                        <td>
                            <a href="?metodo=editar&id=<?= $aluno['id']; ?>">
                                Editar
                            </a>
                        </td>
                    </tr>
                    <?php } /*fim do foreach*/ ?>
            </tbody>
        </table>
    </body>
</html>

            