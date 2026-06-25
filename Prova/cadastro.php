<?php
include 'connection.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$curso = $_POST['curso'];

$sql = mysqli_query($conn, "INSERT INTO aluno(nome, idade, email, curso) VALUES ('$nome', '$idade', '$email', '$curso')");

try{
    
    echo "Aluno Cadastrado"; 
}
    catch(Exception $e){
    echo "um erro ocorreu";
}
