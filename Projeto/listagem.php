<?php //arquivo de listagem dos alunos, que puxa os dados do banco de dados e exibe em uma tabela
include 'connection.php';

$sql = mysqli_query($conn, "SELECT * FROM aluno ORDER BY id DESC"); //puxando todos os alunos do banco de dados e ordenando pelo ID em ordem decrescente
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="style.css"> <!--chamando o arquivo de estilo CSS para a página de listagem-->
</head>
<body>
    <div class="cabecalho">
        <h1>Sistema de Alunos</h1>
    </div>

    <div class="lista">
        <div class="lista-topo">
            <h2>Lista de Alunos</h2>
            <a href="index.php" class="btn-novo">+ Novo Aluno</a> <!--botão para adicionar um novo aluno, que redireciona para a página de cadastro-->
        </div>

        <table class="tabela-alunos"> <!--tabela que exibe os alunos cadastrados no banco de dados, com as colunas de ID, Nome, Idade, E-mail, Curso e Ações-->
            <thead>
                <tr>
                    <th>ID</th> <!--exibindo o ID do aluno-->
                    <th>Nome</th> <!--exibindo o nome do aluno-->
                    <th>Idade</th> <!--exibindo a idade do aluno-->
                    <th>E-mail</th> <!--exibindo o e-mail do aluno-->
                    <th>Curso</th> <!--exibindo o curso do aluno-->
                    <th>Ações</th> <!--exibindo os botões de editar e excluir para cada aluno-->
                </tr>
            </thead>
            <tbody>
                <?php while ($aluno = mysqli_fetch_assoc($sql)): ?> <!--looping pelos alunos cadastrados no banco de dados e exibindo cada um em uma linha da tabela-->
                <tr>
                    <td><?= $aluno['id'] ?></td> <!--exibindo o ID do aluno-->
                    <td><?= htmlspecialchars($aluno['nome']) ?></td> <!--exibindo o nome do aluno, utilizando a função htmlspecialchars para evitar ataques de XSS-->
                    <td><?= htmlspecialchars($aluno['idade']) ?></td> <!--exibindo a idade do aluno, utilizando a função htmlspecialchars para evitar ataques de XSS-->
                    <td><?= htmlspecialchars($aluno['email']) ?></td> <!--exibindo o e-mail do aluno, utilizando a função htmlspecialchars para evitar ataques de XSS-->
                    <td><?= htmlspecialchars($aluno['curso']) ?></td> <!--exibindo o curso do aluno, utilizando a função htmlspecialchars para evitar ataques de XSS-->
                    <td class="acoes">
                        <a href="editar.php?id=<?= $aluno['id'] ?>" class="btn-editar">Editar</a> <!--botão para editar o aluno, que redireciona para a página de edição com o ID do aluno na URL-->
                        <a href="excluir.php?id=<?= $aluno['id'] ?>" class="btn-excluir" onclick="return confirm('Deseja realmente excluir <?= htmlspecialchars($aluno['nome']) ?>?')">Excluir</a> <!--botão para excluir o aluno-->
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>