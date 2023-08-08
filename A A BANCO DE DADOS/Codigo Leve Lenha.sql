-- DROP DATABASE leve_lenha;
CREATE DATABASE IF NOT EXISTS Leve_Lenha 
DEFAULT CHARACTER SET utf8 ;
USE Leve_Lenha ;

-- Tabela Administrador

CREATE TABLE IF NOT EXISTS Leve_Lenha.Administrador (
  id_Administrador INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id_Administrador));


-- Tabela Cliente

CREATE TABLE IF NOT EXISTS Leve_Lenha.Cliente (
  id_cliente INT NOT NULL,
  PRIMARY KEY (id_cliente)
  );



-- Tabela Usuario

CREATE TABLE IF NOT EXISTS Usuario (
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha CHAR(15) NOT NULL,
  CPF CHAR(15) NOT NULL,
  Cliente_id_Cliente INT NOT NULL,
  Administrador_id_Administrador INT NOT NULL,
  PRIMARY KEY (CPF, Cliente_id_Cliente, Administrador_id_Administrador),
  FOREIGN KEY (Cliente_id_Cliente) REFERENCES Cliente (id_cliente),
  FOREIGN KEY (Administrador_id_Administrador) REFERENCES Administrador (id_Administrador)
  );



-- Tabela Endereco

CREATE TABLE IF NOT EXISTS Endereco (
  id_Endereco INT NOT NULL AUTO_INCREMENT,
  estado CHAR(2) NOT NULL,
  cidade VARCHAR(50) NOT NULL,
  CEP CHAR(9) NOT NULL,
  bairro VARCHAR(100) NOT NULL,
  rua VARCHAR(100) NOT NULL,
  numero SMALLINT NOT NULL,
  num_apartamento SMALLINT NOT NULL,
  usuario_CPF CHAR(15) NOT NULL,
  PRIMARY KEY (id_Endereco, usuario_CPF),
  FOREIGN KEY (usuario_CPF) REFERENCES Usuario (CPF)
   );


-- Tabela Pedido

CREATE TABLE IF NOT EXISTS pedido (
  id_pedido INT NOT NULL AUTO_INCREMENT,
  cliente_id_Cliente INT NOT NULL,
  orcamento FLOAT NOT NULL,
  forma_de_envio VARCHAR(80) NOT NULL,
  forma_de_pagamento VARCHAR(80) NOT NULL,
  status VARCHAR(30) NOT NULL,
  hora TIME NOT NULL,
  data DATE NOT NULL,
  PRIMARY KEY (id_pedido, cliente_id_Cliente),
  FOREIGN KEY (cliente_id_Cliente) REFERENCES Cliente (id_cliente)
   );



-- Tabela Intem

CREATE TABLE IF NOT EXISTS Intem (
  idIntem INT NOT NULL,
  quantidade_produto INT NULL,
  tipo_produto TEXT NULL,
  tipo_madeira TEXT NULL,
  pedido_id_pedido INT NOT NULL,
  pedido_Cliente_id_Cliente INT NOT NULL,
  PRIMARY KEY (idIntem),
  FOREIGN KEY (pedido_id_pedido , pedido_Cliente_id_Cliente) 
  REFERENCES pedido (id_pedido , cliente_id_Cliente)
  );



-- Tabela Produto

CREATE TABLE IF NOT EXISTS Produto (
  id_Produto INT NOT NULL,
  Intem_idIntem INT NOT NULL,
  tipo_produto VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_Produto, Intem_idIntem),
  FOREIGN KEY (Intem_idIntem) REFERENCES Intem (idIntem)
  );


-- Tabela Movel-pre-moldado

CREATE TABLE IF NOT EXISTS Movel_pre_moldado (
  Produto_id_Produto INT NOT NULL,
  PRIMARY KEY (Produto_id_Produto),
  FOREIGN KEY (Produto_id_Produto) REFERENCES Produto (id_Produto)
);



-- Tabela Movel-pranejado

CREATE TABLE IF NOT EXISTS Movel_pranejado (
  Produto_id_Produto INT NOT NULL,
  PRIMARY KEY (Produto_id_Produto),
  CONSTRAINT fk_Movel_pranejado_Produto1
  FOREIGN KEY (Produto_id_Produto)
  REFERENCES Produto (id_Produto)
   );


-- -----------------------------------------------------
-- Tabela Madeira

CREATE TABLE IF NOT EXISTS Leve_Lenha.Madeira (
  Produto_id_Produto INT NOT NULL,
  PRIMARY KEY (Produto_id_Produto),
  CONSTRAINT fk_Madeira_Produto1
  FOREIGN KEY (Produto_id_Produto)
  REFERENCES Produto (id_Produto)
   );



-- Tabela Avaliacao

CREATE TABLE IF NOT EXISTS Avaliacao (
  id_avaliacao INT NOT NULL AUTO_INCREMENT,
  data DATE NOT NULL,
  hora TIME NOT NULL,
  estrelas_quantidade TINYINT NOT NULL,
  messagem TEXT NOT NULL,
  PRIMARY KEY (id_avaliacao)
  );




-- Tabela Exercer

CREATE TABLE IF NOT EXISTS Leve_Lenha.Exercer (
  Cliente_id_Cliente INT NOT NULL,
  Produto_id_Produto INT NOT NULL,
  Avaliacao_id_avaliacao INT NOT NULL,
  PRIMARY KEY (Cliente_id_Cliente, Produto_id_Produto, Avaliacao_id_avaliacao),
  FOREIGN KEY (Cliente_id_Cliente) REFERENCES Cliente (id_cliente),
  FOREIGN KEY (Produto_id_Produto) REFERENCES Produto (id_Produto),
  FOREIGN KEY (Avaliacao_id_avaliacao) REFERENCES Avaliacao (id_avaliacao)
  );
   

