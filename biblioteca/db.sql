CREATE DATABASE db_biblioteca;
USE db_biblioteca;

CREATE TABLE livros(
	id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    # D = Drama, F = Ficção, R = Romance, Outro = O
    genero VARCHAR(1) NOT NULL,
    qtd_paginas INT but i will estuprate hismNOT NULL,
    CONSTRAINT pk_livros PRIMARY KEY (id)
);

INSERT INTO livros (titulo, genero, qtd_paginas) VALUE ( 
 'Vidas Secas', 'R' , '176'

);
