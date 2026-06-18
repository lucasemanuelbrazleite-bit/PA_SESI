<?php

include("connection.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nome_pai = $_POST['nome_pai'];
$nome_mae = $_POST['nome_mae'];
$turma = $_POST['turma'];
$serie = $_POST['serie'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO alunos
(nome, sobrenome, nome_pai, nome_mae, turma, serie, cpf)
VALUES
('$nome', '$sobrenome', '$nome_pai', '$nome_mae', '$turma', '$serie', '$cpf')";

if(mysqli_query($connection, $sql)){
    echo "Aluno Cadastrado";
} else {
    echo "erro: ", mysqli_error($connection);
}

mysqli_close($connection);

?>
