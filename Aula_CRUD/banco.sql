CREATE DATABASE aula_sesi;
USE aula_sesi;
CREATE TABLE aluno(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, # o auto increment é usado somente para primary key e aumenta 1 a cada ciclo, Exemplo: (id: 1, nome: Lucas), (id: 2, nome: Dudu)
nome VARCHAR(50) NOT NULL,
serie INT NOT NULL,
turma CHAR(1)
);

SELECT * FROM aluno;
