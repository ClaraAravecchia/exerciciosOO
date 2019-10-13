DROP DATABASE CATASTROFE;
CREATE DATABASE CATASTROFE;

USE CATASTROFE;

CREATE TABLE PAIS(
	ID_PAIS INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(50)
);

CREATE TABLE ESTADO_PROVINCIA(
	ID_ESTADO_PROVINCIA INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(50),
    COD_PAIS INT,
		FOREIGN KEY(COD_PAIS) REFERENCES PAIS(ID_PAIS)
);

CREATE TABLE CIDADE(
	ID_CIDADE INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(50),
    COD_ESTADO_PROVINCIA int,
		FOREIGN KEY(COD_ESTADO_PROVINCIA) REFERENCES ESTADO_PROVINCIA(ID_ESTADO_PROVINCIA)
);

CREATE TABLE VITIMA(
	ID_VITIMA INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(100),
    EMAIL VARCHAR(50),
    SEXO VARCHAR(1),
    DATA_NASCIMENTO DATE,
    COD_CIDADE INT,
		FOREIGN KEY(COD_CIDADE) REFERENCES CIDADE(ID_CIDADE)
);


CREATE TABLE DOADOR(
	ID_DOADOR INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(100),
    EMAIL VARCHAR(50),
    SEXO VARCHAR(1),
    COD_CIDADE INT,
		FOREIGN KEY(COD_CIDADE) REFERENCES CIDADE(ID_CIDADE)
);

CREATE TABLE CATASTROFE(
	ID_CATASTROFE INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(50),
    DATA_CATASTROFE DATE
);

CREATE TABLE DOACAO(
	ID_DOACAO INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    COD_CATASTROFE INT,
		FOREIGN KEY(COD_CATASTROFE) REFERENCES CATASTROFE(ID_CATASTROFE),
	COD_DOADOR INT,
		FOREIGN KEY(COD_DOADOR) REFERENCES DOADOR(ID_DOADOR),
	VALOR NUMERIC(5,2)
);