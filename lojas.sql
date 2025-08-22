CREATE DATABASE loja;

CREATE TABLE loja.categoria(
   id_categoria  INT PRIMARY KEY AUTO_INCREMENT,
   nome_categoria VARCHAR(45) NOT NULL
   
);


CREATE TABLE loja.produtos(
    id_produto INT PRIMARY KEY AUTO_INCREMENT,
    nome_produto VARCHAR(60) NOT  NULL,
    preco_produto FLOAT,
    id_categoria INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categoria (id_categoria)
);


