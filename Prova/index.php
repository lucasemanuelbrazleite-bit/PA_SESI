<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cabecaralho">
    <h1>miau</h1>
    </div>
    <div class="tabela">
            <form action="cadastro.php" method="post">
        <div class="container">
            <label for="">NOME:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo...">
        </div>
        <div class="container">
            <label for="">IDADE:</label>
            <input type="text" name="idade" id="idade" placeholder="Digite sua idade...">
        </div>
        <div class="container">
            <label for="">E-MAIL:</label>
            <input type="text" name="email" id="email" placeholder="Digite seu email...">
        </div>
        <div class="container">
            <label for="">CU:</label>
            <input type="text" name="curso" id="curso" placeholder="Digite seu curso...">
        </div>
        <div class="container">
            <button type="submit">Cadastrar</button>
        </div>
        </form>
    </div>
</body>
</html>