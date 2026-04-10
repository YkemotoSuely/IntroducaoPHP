CREATE TABLE produtos (
    id int auto_increment primary key ,
    nome   varchar(100) NULL,
    preco  decimal(10,2) NULL,
    estoque int(11) NULL
) ;
 
INSERT INTO produtos (id, nome, preco, estoque)
VALUES
     (1, 'Camiseta','79.90','10'),
     (2, 'Calça','59.90','5'),
     (3, 'Tênis','500.00','2');

SELECT nome,preco,estoque FROM produtos;