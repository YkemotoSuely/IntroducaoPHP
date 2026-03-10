CREATE DATABASE escola_suely;

CREATE TABLE alunos (
     id int auto_increment primary key ,
    nome   varchar(70) NOT NULL,
    idade  int NULL, --o ideal é que se use o tipo tinyint no SQL Server é um tipo de dado numérico inteiro de 1 byte (8 bits) usado para armazenar números inteiros positivos de 0 a 255. É ideal para economizar espaço em colunas que armazenam pequenos valores, como estados (0/1), idades, ou classificações, sem aceitar números negativos ou valores decimais. UNSIGINED (S/ sinal)
    uf char(2) NULL, 
    cidade varchar(50) NULL
) ;
/*Qdo coloco NULL para os campos, permito que seja feito um pré-cadatro apenas com id e nome, e alimentar os demais campos depois*/
INSERT INTO alunos (id, nome, idade, uf, cidade)
VALUES
     (1, 'Suely','60','SP', 'Marília'),
     (2, 'Caroline','16','SP', 'Marília'),
     (3, 'Harry Dibs','16','SP', 'Marília');

SELECT nome, idade, uf, cidade FROM alunos;