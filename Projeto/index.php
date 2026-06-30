<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css"> <!--chamando o arquivo de estilo CSS para a página de cadastro-->
</head>
<body>
    <div class="cabecalho"> <!--div class="cabecalho" é uma div que contém o cabeçalho da página, que neste caso é o título "Cadastrar Aluno"-->
    <h1>Cadastrar Aluno</h1>
    </div>
    <div class="tabela"> <!--div class="tabela" é uma div que contém a tabela de cadastro do aluno, que neste caso é um formulário com os campos de nome, idade, e-mail e curso-->
            <form action="cadastro.php" method="post">
        <div class="container"> <!--div class="container" é uma div que contém o campo de nome do aluno, que neste caso é um input do tipo text com o placeholder "Digite seu nome completo..."-->
            <label for="">NOME:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo...">
        </div>
        <div class="container"> <!--div class="container" é uma div que contém o campo de idade do aluno, que neste caso é um input do tipo text com o placeholder "Digite sua idade..."-->
            <label for="">IDADE:</label>
            <input type="text" name="idade" id="idade" placeholder="Digite sua idade...">
        </div>
        <div class="container"> <!--div class="container" é uma div que contém o campo de e-mail do aluno, que neste caso é um input do tipo text com o placeholder "Digite seu email..."-->
            <label for="">E-MAIL:</label>
            <input type="text" name="email" id="email" placeholder="Digite seu email...">
        </div>
        <div class="container"> <!--div class="container" é uma div que contém o campo de curso do aluno, que neste caso é um input do tipo text com o placeholder "Digite seu curso..."-->
            <label for="">CURSO:</label>
            <input type="text" name="curso" id="curso" placeholder="Digite seu curso...">
        </div>
        <div class="container"> <!--div class="container" é uma div que contém o botão de salvar, que neste caso é um botão do tipo submit com o texto "Salvar"-->
            <button type="submit">Salvar</button>
        </div>
        </form>
    </div>
</body>
</html>