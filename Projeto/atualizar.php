<?php //arquivo de atualização do aluno, que recebe os dados do formulário de edição e atualiza no banco de dados
include 'connection.php';

$id = $_POST['id'];
$nome = trim($_POST['nome']);
$idade = trim($_POST['idade']);
$email = trim($_POST['email']);
$curso = trim($_POST['curso']);

if ($nome === '' || $idade === '' || $email === '' || $curso === '') {
    die("Erro: todos os campos precisam ser preenchidos.");
}

$sql = mysqli_query($conn, "UPDATE aluno SET nome='$nome', idade='$idade', email='$email', curso='$curso' WHERE id='$id'");

if (!$sql) {
    die("Erro no UPDATE: " . mysqli_error($conn));
}

header("Location: listagem.php");
exit;