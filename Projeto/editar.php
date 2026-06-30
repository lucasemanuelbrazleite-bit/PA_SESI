<?php //arquivo de edição do aluno, que recebe o ID do aluno a ser editado e exibe os dados do aluno em um formulário para edição
include 'connection.php';

$id = $_GET['id'];

$sql = mysqli_query($conn, "SELECT * FROM aluno WHERE id = '$id'");
$aluno = mysqli_fetch_assoc($sql);

if (!$aluno) {
    echo "Aluno não encontrado.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <link rel="stylesheet" href="style.css"> <!--chamando o arquivo de estilo CSS para a página de edição-->
</head>
<body>
    <div class="cabecalho"> <!--div class="cabecalho" é uma div que contém o cabeçalho da página, que neste caso é o título "Editar Aluno"-->
        <h1>Editar Aluno</h1>
    </div>
    <div class="tabela"> <!--div class="tabela" é uma div que contém a tabela de edição do aluno, que neste caso é um formulário com os campos de nome, idade, e-mail e curso-->
        <form action="atualizar.php" method="post">
            <input type="hidden" name="id" value="<?= $aluno['id'] ?>">

            <div class="container"> <!--div class="container" é uma div que contém o campo de nome do aluno, que neste caso é um input do tipo text com o valor preenchido com o nome do aluno-->
                <label for="nome">NOME:</label>
                <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($aluno['nome']) ?>">
            </div>
            <div class="container"> <!--div class="container" é uma div que contém o campo de idade do aluno, que neste caso é um input do tipo text com o valor preenchido com a idade do aluno-->
                <label for="idade">IDADE:</label>
                <input type="text" name="idade" id="idade" value="<?= htmlspecialchars($aluno['idade']) ?>">
            </div>
            <div class="container"> <!--div class="container" é uma div que contém o campo de e-mail do aluno, que neste caso é um input do tipo text com o valor preenchido com o e-mail do aluno-->
                <label for="email">E-MAIL:</label>
                <input type="text" name="email" id="email" value="<?= htmlspecialchars($aluno['email']) ?>">
            </div>
            <div class="container"> <!--div class="container" é uma div que contém o campo de curso do aluno, que neste caso é um input do tipo text com o valor preenchido com o curso do aluno-->
                <label for="curso">CURSO:</label>
                <input type="text" name="curso" id="curso" value="<?= htmlspecialchars($aluno['curso']) ?>">
            </div>

            <div class="container container-botoes"> <!--div class="container container-botoes" é uma div que contém os botões de atualizar e cancelar, que neste case são um botão do tipo submit com o texto "Atualizar" e um link para a página de listagem com o texto "Cancelar"-->
                <button type="submit" class="btn-atualizar">Atualizar</button>
                <a href="listagem.php" class="btn-cancelar">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>