CREATE DATABASE if not exist yuree2;
USE yuree2;

CREATE TABLE contato (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(40) NOT NULL,
    nome VARCHAR(40) NOT NULL,
    escola VARCHAR(40) NOT NULL,
    qtd_alunos INT NOT NULL,
    dia varchar(40) NOT NULL,
    mensagem varchar(200)
);


CREATE TABLE quiz (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(40) NOT NULL,
    nome VARCHAR(40) NOT NULL,
    escola VARCHAR(40) NOT NULL,
    pergunta1 varchar(200) not null,
    pergunta2 varchar(200) not null,
    pergunta3 varchar(200) not null,
    pergunta4 varchar(200) not null,
    pergunta5 varchar(200) not null,
    pergunta6 varchar(200) not null,
    pergunta7 varchar(200) not null,
    pergunta8 varchar(200) not null,
    pergunta9 varchar(200) not null,
    pergunta10 varchar(200) not null,
    pergunta11 varchar(200) not null,
    pergunta12 varchar(200) not null,
    pergunta13 varchar(200) not null
    
);
