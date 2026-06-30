<?php //arquivo de cadastro do aluno, que recebe os dados do formulário de cadastro e insere no banco de dados
include 'connection.php';

$nome = trim($_POST['nome']); //trim() remove espaços em branco do início e do fim da string
$idade = trim($_POST['idade']);
$email = trim($_POST['email']);
$curso = trim($_POST['curso']);

if ($nome === '' || $idade === '' || $email === '' || $curso === '') { //verifica se todos os campos estão preenchidos
    die("Erro: todos os campos precisam ser preenchidos.");
}

$sql = mysqli_query($conn, "INSERT INTO aluno(nome, idade, email, curso) VALUES ('$nome', '$idade', '$email', '$curso')");

if ($sql) {
    header("Location: listagem.php");
    exit;
} else {
    echo "Um erro ocorreu ao cadastrar.";
}