<?php //arquivo de exclusão do aluno, que recebe o ID do aluno a ser excluído e remove do banco de dados
include 'connection.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM aluno WHERE id='$id'"); //excluindo o aluno do banco de dados com base no ID fornecido na URL

header("Location: listagem.php");
exit;