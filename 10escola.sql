CREATE DATABASE escola_suely;

CREATE TABLE alunos (
     id int auto_increment primary key ,
    nome   varchar(70) NOT NULL,
    idade  int NOT NULL,
    uf char(2)  NOT NULL, 
    cidade varchar(50)  NOT NULL
) ;

INSERT INTO alunos (id, nome, idade, uf, cidade)
VALUES
     (1, 'Suely','60','SP', 'Marília'),
     (2, 'Caroline','16','SP', 'Marília'),
     (3, 'Harry Dibs','16','SP', 'Marília');

SELECT nome, idade, uf, cidade FROM alunos;