CREATE DATABASE alunos;
USE alunos;
CREATE TABLE alunos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ra INT,
    nome VARCHAR(100),
    periodo VARCHAR(50),
    curso VARCHAR(50)
);